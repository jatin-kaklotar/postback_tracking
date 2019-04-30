<?php
ini_set('display_errors', 1);

use Server1\DbConnection;
use Server1\Crud;

require_once "DbConnection.php";
require_once "Crud.php";
require_once "../config.php";

if ($_POST) {
    try {
        $data =[
            "date_time" =>  $_POST['time'],
            'heading' =>  $_POST['h1'],
            'page' =>  $_POST['page']
        ];
        $connectionObject = new DbConnection($host, $databaseName, $username, $password);
        $obj = new Crud($connectionObject);
        $obj->insert($data);
        echo true;
    } catch (\Throwable $e) {
        echo false;
    }
}
