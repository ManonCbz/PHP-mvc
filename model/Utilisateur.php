<?php


class Utilisateur
{

    private $usersList;

    public function __construct()
    {
        $this->usersList = array("Sebastien", "Lucie", "Robert", "Max");
    }

    public function getAll()
    {
        return $this->usersList;
    }

}