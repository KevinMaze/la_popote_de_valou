<?php
    require_once ("templates-admin/header-admin.php");
    require_once ("../lib/menu.php");

    $categories = getCategorie($pdo);

    $recipes = getRecipeByCategorie($pdo);
?>

<section class="section__gestion__carte">

    <h1>Carte</h1>

    <hr>

    


</section>


<?php
    require_once ("templates-admin/footer-admin.php");
?>
