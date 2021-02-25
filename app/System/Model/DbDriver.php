<?php

namespace App\System\Model;


class DbDriver implements IDbDriver
{

    private static $_instance;
    private $instanceDb;


    private function __construct()
    {

    }

    public static function getInstance()
    {
        if (self::$_instance instanceof static) {
            return self::$_instance;
        }

        return self::$_instance = new static();
    }


    public function setConnection($host, $user, $pass, $db)
    {
        try {
            $this->instanceDb = new \mysqli($host, $user, $pass, $db);

            if ($this->instanceDb->connect_error) {
                throw new \Exception("Error DB");
            }

            $this->instanceDb->query("SET NAMES 'UTF8'");
        } catch (\Exception $e) {
            exit();
        }
    }

    public function query($sql)
    {
        return $this->instanceDb->query($sql);
    }

    public function getInstanceDb()
    {
        return $this->instanceDb;
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}