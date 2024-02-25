<?php
    require_once ("templates-admin/header-admin.php");
    require_once ("../lib/menu.php");

    $dayMenus = getDayMenu($pdo);
?>
    <section class="section__gestion__day-menu">

        <h1>Menu du jour</h1>

        <hr>

        <table class="table table-hover table__custom">
            <tcaption>Liste des menus du jour</tcaption>
            <thead>
                <tr>
                    <th scope="col">Jour</th>
                    <th scope="col" class="disable">Entrée</th>
                    <th scope="col" class="disable">Plat</th>
                    <th scope="col" class="disable">Desserts</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($dayMenus as $key => $dayMenu) {?>
                    <tr>
                        <td><?= $dayMenu["day"] ?></td>
                        <td class="disable"><?= $dayMenu["entre"] ?></td>
                        <td class="disable"><?= $dayMenu["plat"] ?></td>
                        <td class="disable"><?= $dayMenu["dessert"] ?></td>
                        <td><a href="modification_day-menu.php?id=<?= $dayMenu['id_day_menu'] ?>" class="button__custom">Modifier /</a><button type="button" class="button__custom" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= htmlentities($dayMenu["id_day_menu"])?>">Voir Menu</button>
                            <div class="modal fade " id="staticBackdrop<?= htmlentities($dayMenu["id_day_menu"])?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Menu de <?= $dayMenu["day"] ?></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                    <div class="modal-body">
                                        <p>Entrée : <?= $dayMenu["entre"] ?></p>
                                        <p>Plat : <?= $dayMenu["plat"] ?></p>
                                        <p>Desserts : <?= $dayMenu["dessert"] ?></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="button__custom" data-bs-dismiss="modal">Fermer</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
        <hr>
    </section>

<?php
    require_once ("templates-admin/footer-admin.php");
?>