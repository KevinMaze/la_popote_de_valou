<?php
    require_once ("templates-admin/header-admin.php");
    require_once ("../lib/menu.php");
    $error = false;
    $messages = [];
    $errors = [];
    require_once ("../request/request_change_day_menu.php");
?>

<?php if(!$error) {?>

    <?php require_once ('templates-admin/modification_day-menu_part.php') ?>

<?php }else { ?>
    <div class="alert alert-danger">Une erreur s'est produite !</div>
<?php } ?>

<script>setTimeout(() => {window.location.href="day-menu.php"}, 4000);</script>
<?php
    require_once ("templates-admin/footer-admin.php");
?>