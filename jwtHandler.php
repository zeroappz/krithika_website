<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST,GET,DELETE,PATCH,OPTIONS");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Origin, Accept, Content-Type, Authorization, X-Requested-With");
header("Access-Control-Max-Age: 3600");

require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/sendJson.php";

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Firebase\JWT\ExpiredException;
use Firebase\JWT\SignatureInvalidException;

$tokenSecret = 'ee1123e123e12312e12e1';


function encodeToken($data)
{
    global $tokenSecret;
    $token = array(
        'iss' => 'http://localhost/sports_club/',
        'iat' => time(),
        'exp' => time() + 43200, //12 hr
        'data' => $data
    );
    return JWT::encode($token, $tokenSecret, 'HS256');
}

function decodeAuthorizationToken($table, $connection)
{
    global $tokenSecret;
    try {
        $authorizationHeader = array_key_exists('authorization', getallheaders()) ? getallheaders()['authorization'] : (array_key_exists('Authorization', getallheaders()) ? getallheaders()['Authorization'] : null);
        if ($authorizationHeader && preg_match('/Bearer\s(\S+)/', $authorizationHeader, $matches)) :
            $decode = JWT::decode($matches[1], new Key($tokenSecret, 'HS256'));
            $data = $decode->data;
            $id = (int) $data;
            if (!is_numeric($data)) {
                sendJson(false, 401, 'Invalid User!');
            }

            $sql = "SELECT * FROM staff_member WHERE `id` = :id";
            $stmt = $connection->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row === false) {
                $sql = "SELECT * FROM users WHERE `id` = :id";
                $stmt = $connection->prepare($sql);
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->execute();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($row === false) {
                    sendJson(false, 404, 'User not found!');
                }
            }
            return 1;
        endif;
        sendJson(false, 403, "Authorization Token is Missing!");
    } catch (ExpiredException | SignatureInvalidException $e) {
        sendJson(false, 401, $e->getMessage());
    } catch (UnexpectedValueException | Exception $e) {
        sendJson(false, 400, $e->getMessage());
    }
}
