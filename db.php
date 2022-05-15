<?php
//a db class for connecting to the database
class Db
{
    private static $instance = null;

    public static function getInstance()
    {
        if (!isset(self::$instance)) {

            self::$instance = mysqli_connect("localhost", "root", "", "form_db");
        }
        return self::$instance;
    }
}
