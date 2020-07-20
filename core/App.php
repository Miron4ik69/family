<?php 


class App 
{

   protected static $reqistry = [];

   public static function bind($key, $value)
   {
        static::$reqistry[$key] = $value;
   }

   public static function get($key) 
   {
        if(!array_key_exists($key, static::$reqistry)) {
            throw new Exception("Нет {$key}, в контейнере");
        }

        return static::$reqistry[$key];
   }

}