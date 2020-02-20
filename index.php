<?php

?>

<body>
    <ul>
        <li><a href="index.php?controller=utilisateur&action=UserList">Lister les utilisateurs</a></li>
        <li><a href="index.php?controller=utilisateur&action=UserListByAge">Lister les utilisateurs par age</a></li>

        <li><a href="index.php?controller=commentaires&action=List">Lister les commentaires</a></li>
    </ul>

<?php

$controller = $_GET['controller'];
$action = $_GET['action'];

switch ($controller)
{
    case "utilisateur":

        // Gerer le fait que l'utilisateur demande la partie utilisateur
        require "model/Utilisateur.php";
        require "controller/UtilisateurController.php";

        $controller = new UtilisateurController();

        switch ($action)
        {
            case "UserList":
                $controller->Userslist();
                break;
            case "UserListByAge":

                break;
        }

        break;

    case "commentaires":

        switch ($action)
        {
            case "List":

                break;
        }

        break;
}

?>

</body>
