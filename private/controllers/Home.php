<?php 

class Home extends Controller
{
    function index()
    {
        //code ..
        $db = new DatabaseConnection();

        $data = $db->query("select * from users");
        $this-> view('home', ['rows'=> $data]);
    }

}