<?php

namespace App;

class insertdata extends Controller
{
    function index()
    {
        $connection = mysqli_connect("127.0.0.1", "root", "");
        $db = mysqli_select_db($connection, 'pp_extranet');

        if (isset($_POST['insertdata'])) {
            $client = $_POST['client'];
            $workgroup = $_POST['workgroup'];
            $worktype = $_POST['worktype'];
            $priority = $_POST['priority'];
            $location = $_POST['location'];
            $date = $_POST['date'];
            $description = $_POST['description'];
            $materials = $_POST['materials'];
            $files = $_POST['files'];

            $query = "INSERT INTO orders (client,workgroup,worktype,priority,location,date,description,materials,files) VALUES ('$client','$workgroup','$worktype','$priority','$location','$date','$description','$materials','$files')";
            $query_run = mysqli_query($connection, $query);

        }
    }
}