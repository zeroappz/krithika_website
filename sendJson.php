<?php

/**
 * The function `sendJson` sends a JSON response with a status code, message, and optional extra data.
 *
 * @param int status The status parameter is an integer that represents the HTTP status code of the
 * response. It indicates the success or failure of the request.
 * @param string message The "message" parameter is a string that represents a custom message that you
 * want to include in the JSON response. It can be used to provide additional information or context
 * about the response status.
 * @param array extra The `` parameter is an optional array that allows you to include additional
 * data in the JSON response. It can be used to pass any extra information that you want to include in
 * the response.
 */
function sendJson(bool $responseStatus, int $status, string $message, array $extra = []): void
{
    // echo based on the ENV APP_MODE
    // if ($_ENV['APP_MODE'] === 'development') {
    $response = ['status' => $responseStatus];
    if ($message) {
        $response['message'] = $message;
    }
    if ($extra) {
        $response['data'] = $extra;
    }
    http_response_code($status);
    // echo json_encode(array_merge($response));
    echo json_encode([
        'status' => $responseStatus,
        'message' => $message,
        'data' => $extra
    ]);
    exit;
    // }
}
