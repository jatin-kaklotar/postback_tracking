<?php
namespace Server1;

class DbConnection
{

    /**
     * Assign pdo database connection variable
     *
     * @param string $host
     * @param string $dbName
     * @param string $username
     * @param string $password
     */
    public function __construct($host, $dbName, $username, $password)
    {
        $this->host = $host;
        $this->databaseName = $dbName;
        $this->username = $username;
        $this->password = $password;
    }

    /***
     * Create database connection
     */
    public function connect()
    {
        $dsn = "mysql:dbname=$this->databaseName; host=$this->host";
        $options = array(
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
        );
        return new \PDO($dsn, $this->username, $this->password, $options);
    }
}
