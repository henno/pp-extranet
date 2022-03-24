<?php namespace App;

class dashboard extends Controller
{

    function index()
    {
        $this->users = get_all("SELECT * FROM users");
    }


}