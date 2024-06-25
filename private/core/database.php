<?php

class DatabaseConnection 
{
    private function connect()
    {
        $string = "mysql:host=localhost;dbname=school";
        $username = 'root'; // Change this to your MySQL username
        $password = 'Ailo'; // Change this to your MySQL password

        try {
            $conn = new PDO($string, $username, $password);
            // Set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            die('Could not connect to the database: ' . $e->getMessage());
        }
        return $conn;
    }

    public function query($query, $data = array(), $data_type = "object")
    {
        $conn = $this->connect();
        $stm = $conn->prepare($query);

        if($stm)
        {
            $check = $stm ->execute($data);
            if($check)
            {
                if($data_type ==  "object")
                {
                    $data = $stm->fetchAll(PDO::FETCH_OBJ);
                }
                else
                {
                    $data = $stm->fetchAll(PDO::FETCH_ASSOC);

                }

                if(is_array($data) && count($data) > 0)
                {
                    return $data;
                }
            }
        }

        return  false;
    }
}

