<?php

// Load and parse .env file
$envFile = __DIR__ . './.env';


/* The code block is checking if the `.env` file exists in the current directory. If it does, it
proceeds to parse the contents of the file using the `parse_ini_file()` function. The parsed
key-value pairs are then assigned to the `` superglobal array, making the environment variables
accessible throughout the PHP script. */
if (file_exists($envFile)) {
    $env = parse_ini_file($envFile);
    foreach ($env as $key => $value) {
        $_ENV[$key] = $value;
    }
}

// Access ENV value APP_MODE and check whether it is a production or development mode
// using a ternary operator.
define('APP_MODE', $_ENV['APP_MODE'] ?? 'development');
$mode = $_ENV['APP_MODE'] ?? 'development';
$mode = ($mode === 'production') ? 'production' : 'development';
