<?php

class Database
{
    private string $host;
    private string $dbName;
    private string $username;
    private string $password;
    private ?mysqli $mysqli = null;
    private ?string $error = null;

    public function __construct()
    {
        $this->loadConfig();
        $this->connect();
    }

    private function loadConfig(): void
    {
        $config = include __DIR__ . '/config.php';
        $this->host = $config['db_host'] ?? '';
        $this->dbName = $config['db_name'] ?? '';
        $this->username = $config['db_user'] ?? '';
        $this->password = $config['db_pass'] ?? '';
    }

    private function connect(): void
    {
        $this->mysqli = new mysqli($this->host, $this->username, $this->password, $this->dbName);

        if ($this->mysqli->connect_error) {
            $this->error = $this->mysqli->connect_error;
            // Handle the error appropriately
            echo "Database connection failed: " . $this->error;
        }
    }

    public function getConnection(): ?mysqli 
    {
        return $this->mysqli;
    }

    public function getError(): ?string
    {
        return $this->error;
    }
}

// Allow all origins
header("Access-Control-Allow-Origin: *");

// Allow specific HTTP methods
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");

// Allow specific headers
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// If the request method is OPTIONS, exit early (this is for preflight requests)
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit(0);
}

?>