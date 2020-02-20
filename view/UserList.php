<?php

?>

<h1>Liste des utilisateurs</h1>
<ul>
    <?php
    foreach ($usersList as $user)
    {
    ?>
    <li>
        <?= $user ?>
    </li>
    <?php
    }
    ?>
</ul>
