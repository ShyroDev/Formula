<?php

namespace Repository;

use Database;
use PDO;

class VoitureRepository
{
    public function findAll(): false|array
    {
        $connexion = Database::getConnexion();

        $voitureData = $connexion->query("SELECT V_id as id,V_name AS name, V_color AS color,
            V_numberPlace AS numberPlace, V_numberDoor AS numberDoor, V_length AS length, 
            V_width AS width FROM Voiture");

        if (!isset($connexion))
        {
            if ($voitureData !== false)
            {
                return $voitureData->fetchAll(PDO::FETCH_ASSOC);
            }
        }

        return array();
    }



}