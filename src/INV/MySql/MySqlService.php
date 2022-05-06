<?php

namespace INV\MySql;

class MySqlService
{
    private $config;
    public function __construct($config)
    {
        $this->config = $config;
    }

    public function query($query){
        $conn = mysqli_connect(
            $this->config['database']['host'],
            $this->config['database']['username'],
            $this->config['database']['password'],
            $this->config['database']['database']
        );
        $rawResult = mysqli_query($conn, $query);
        $result = [];
        while ($row = $rawResult->fetch_assoc()) {
            $result[] = $row;
        }
        return $result;
    }
}