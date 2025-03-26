<?php
namespace app\connection;
use Flight;

class UtilDb
{
    public static function getCon()
    {
        return Flight::db();
    }
}
