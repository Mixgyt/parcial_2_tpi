<?php
    namespace lib;

    use PDO, PDOException;

    class Database{
        private static string $host = "db";
        private static string $name = "Eje1";
        private static string $username = "root";
        private static string $pass = "rootpass";

        public static function getConexion(){
            $conn = null;
            try{ 
                $conn = new PDO("mysql:host=".self::$host.";dbname=".self::$name,self::$username,self::$pass);
                $conn->exec("set names utf8");
                $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }
            catch(PDOException $exeption){
                echo "Error de conexion: ".$exeption->getMessage();
            }
            return $conn;
        }
    }
?>