<?php 
    require_once ('templates/header.php');
    require_once ('lib/menu.php');
    $dayMenu = getDayMenu($pdo);

    $categories = getCategorie($pdo);

    $recipes = getRecipeByCategorie($pdo);

    require_once ('templates/date_function.php');

?>

<div class="line flux"></div>

<section class="section__day-menu flux">
    <h2 class="title__custom">Notre Carte</h2>
    <div class="div__section__day-menu">
        <p class="para__index">Plat du jours - 11,50€</p>
        <p class="para__index">Entrée + Plat où Plat + Dessert - 15,90€</p>
        <p class="para__index">Entrée + Plat + Dessert - 18,90€</p>
        <div class="day-menu">
            <?php foreach ($dayMenu as $key => $dayMenu) {
                if(WeekDay(time()) === $dayMenu["day"]){?>
                <p class="para__index"><?= htmlentities($dayMenu["entre"])?></p>
                <p>*****</p>
                <p class="para__index"><?= htmlentities($dayMenu["plat"])?></p>
                <p>*****</p>
                <p class="para__index"><?= htmlentities($dayMenu["dessert"])?></p>
                <?php } else{ ?>
                <p class="para__index">Aucun menu du jour n'est disponible</p>
                    <?php } ?>
            <?php } ?>
        </div>
    </div>
</section>

<div class="line flux"></div>

<section class="section__menu flux">

    <?php include ('templates/restaurant_part.php'); ?>

</section>
    
<?php
    require_once ('templates/footer.php');
?>