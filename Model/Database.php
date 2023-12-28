<?php

class Database
{

    private static string $DATABASE_ADDRESS = "";
    private static string $DATABASE_NAME = "";
    private static string $DATABASE_USERNAME = "";
    private static string $DATABASE_PASSWORD = "";
    private static PDO $connexion;


    public function __construct()
    {

    }

    /**
     * Create a connexion with php and the database with PDO.
     * @return bool
     */
    public static function init(): bool
    {
        if (!isset(Database::$connexion))
        {
            try
            {
                Database::$connexion =  new PDO("mysql:host=" . Database::$DATABASE_ADDRESS . ";dbname=" . database::$DATABASE_NAME,
                    database::$DATABASE_USERNAME,database::$DATABASE_PASSWORD
                );
            }
            catch (PDOException $PDOException)
            {

            }

            return false;
        }

        return true;
    }


    public static function getConnexion(): ?PDO
    {
        if (!isset(Database::$connexion))
        {
            return Database::$connexion;
        }

        return null;
    }

}