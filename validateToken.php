<?php

header("Access-Control-Allow-Origin: [*,http://localhost:4200,http://localhost:3000]");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// require_once __DIR__ . './jwtHandler.php';
// include_once __DIR__ . './sendJson.php';
include_once './jwtHandler.php';
include_once './sendJson.php';

/* The `class ValidateToken` is responsible for validating the authorization token sent in the request
headers. It checks if the token exists and is valid by decoding it using the `decodeToken` function
from the `jwtHandler.php` file. If the token is valid, it retrieves the user ID from the decoded
token and queries the database to check if the user exists. If the user exists, it returns a value
of 1. If the token is missing or invalid, it returns an appropriate error response using the
`sendJson` function from the `sendJson.php` file. */
class ValidateToken
{
    private $token;
    private $connection;
    private $headers;
    // constructor with $db as database connection
    public function __construct($db)
    {
        $this->connection = $db;
        $this->headers = getallheaders();
        $this->VerifyToken();
    }

    /**
     * The function VerifyToken checks if an authorization token is present in the headers, decodes the
     * token, verifies the user ID, and returns 1 if successful.
     *
     * @return the value 1 if the token is verified and the user is found in the database.
     */
    public function VerifyToken()
    {
        if (array_key_exists('Authorization', $this->headers) && preg_match('/Bearer\s(\S+)/', $this->headers['Authorization'], $matches)) :
            $data = decodeToken($matches[1]);
            $userId = (int) $data;

            if (!is_numeric($data)) {
                sendJson(401, 'Invalid User!');
            }
            // Assuming $this->connection is a PDO connection
            $sql = "SELECT * FROM `users` WHERE `user_id` = :userId";
            $stmt = $this->connection->prepare($sql);
            $stmt->bindParam(':userId', $userId, PDO::PARAM_INT);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row === false) {
                sendJson(404, 'User not found!');
            }
            return 1;
        endif;
        sendJson(403, "Authorization Token is Missing!");
    }
}
