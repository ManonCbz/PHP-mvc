<?php

class UtilisateurController {

    private $modelUtilisateur;

    public function __construct()
    {
        $this->modelUtilisateur = new Utilisateur();
    }

    public function Userslist()
    {
        $usersList = $this->modelUtilisateur->getAll();
        include "view/UserList.php";
    }

}