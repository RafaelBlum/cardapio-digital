<?php


namespace Source\Core;
use PDO;

class Connect
{
    /**    ---------    DATA LOCALHOST   ----------*/
    private const HOST = "localhost";
    private const USER = "root";
    private const DBNAME = "database_docitos";
    private const PASSWORD = "";

    private const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];

    private static $instance;


    /**
     * @return PDO
     */
    public static function getInstance(): ?\PDO
    {
        if (empty(self::$instance)){
            try {
                self::$instance = new PDO(
                    "mysql:host=".self::HOST.";dbname=".self::DBNAME.";",
                    self::USER,
                    self::PASSWORD,
                    self::OPTIONS
                );
            }catch (PDOException $e){
                die("<h1>Whooops... Erro ao conectar!!</h1>");
            }
        }
        return self::$instance;
    }

    final private function __construct(){}
    final private function __clone(){}
}
