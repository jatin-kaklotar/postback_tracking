<?php
namespace Server1;

class Crud
{
    /**
     * Assign connection object instance
     *
     * @param DbConnection $connectionObject
     */
    public function __construct(DbConnection $connectionObject)
    {
        $this->dbConnection = $connectionObject;
    }

    /**
     * Add record
     *
     * @param array $data
     * @return void
     */
    public function insert($data)
    {
        $connection = $this->dbConnection->connect();
        $sql = "insert server_to_server (date_time, heading, page) values (:date_time, :heading, :page)";
        $statement = $connection->prepare($sql);
        $statement->execute($data);
    }
}

