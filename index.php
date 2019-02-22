<?php
/**
 * Created by PhpStorm.
 * User: scott
 * Date: 22/02/2019
 * Time: 20:51
 */
    $title = "Livre d'or";
    require_once 'template/header.php';
 ?>

    <div class="container mt-3">
        <h2 class="text-center text-uppercase">Livre d'or</h2>
        <hr>
        <!-- Default form register -->
        <form class="text-center border border-light p-5" action="" method="post">
            <div class="form-row mb-4">
                <div class="col-lg-12">
                    <!-- First name -->
                    <input type="text" name="username" class="form-control" placeholder="First name">
                </div>
                <div class="col-lg-12 mt-3">
                    <!-- First name -->
                    <textarea name="message" cols="7" rows="4" class="form-control" placeholder="votre message"></textarea>
                </div>
            </div>
        </form>
        <!-- Default form register -->
    </div>


<?php require_once 'template/footer.php' ?>