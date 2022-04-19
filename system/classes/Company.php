<?php

namespace App;

class Company
{
    static public function get($criteria)
    {
        $function = is_numeric($criteria) ? "get_first" : "get_all";
        $where = SQL::getWhere($criteria, "companyId");
        return $function("
            SELECT * FROM companies
            $where
        ");
    }

    /**
     * Retrieves the active company's data from DB and writes it to session for later quick access
     * @return void
     */
    public static function setActive($companyId): void
    {
        Session::set('activeCompany', Company::get($companyId));
    }

}