<?php

/**
 * Définir les méthodes qui sont trés utilisées dans les controleurs pour éviter la répétition
 * Classe Mère Abstraite (On ne peut pas l'instancier)
 *
 * Class AbstractController
 */
abstract class AbstractController
{
    /**
     * Inclure une vue et envoyer des paramètres à cette vue si elle existe
     *
     * @param string $path
     * @param array $params
     */
    public function renderView(string $path, array $params = [])
    {
        foreach ($params as $key => $value)
        {
            $$key = $value;
        }
        include_once "views/$path.php";
    }

    /**
     * Redirection vers un chemin
     *
     * @param string $path
     */
    public function redirectTo(string $path)
    {
        header("Location: $path");
        exit;
    }
}