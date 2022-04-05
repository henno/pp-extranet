<?php namespace App;

class companies extends Controller
{

    function index()
    {
        $this->companies = get_all("SELECT * FROM companies");
    }

    function view()
    {
        $company_id = $this->getId();
        $this->company = get_first("SELECT * FROM companies WHERE companyId = '{$company_id}'");
    }

}