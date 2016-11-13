<?php

/**
 * Singleton - патерни. Потрібен для створення одного екземпляра класу (з ф-єю не створювати ще екземпляри даного класу)
 */

class Singleton
{
    protected static $instance;

    public static function getInstance()
    {
        if ( !isset(self::$instance)){
            $class = __CLASS__;
            self::$instance = new $class();
            echo "First initialization <br>";
        }else
        {
            echo "second initialization <br>";
        }
        return self::$instance;
    }

    private function __construct(){} //Защита от созданий через new Singleton
    private function __clone(){}     //Защита от созданий через клонирование
    private function __wakeup(){}    //Защита от созданий через unserialize
}

//$newSingleton = new Singleton();
Singleton::getInstance();
Singleton::getInstance();
Singleton::getInstance();