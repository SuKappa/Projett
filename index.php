<?php include('partials/menu.php') ?>

        <!-- Main Content Section debut  -->
        <div class="main-content">
            <div class="wrapper">
                <h1>DASHBOARD</h1>
                <br>

                <?php
                    if(isset($_SESSION['login']))
                    {
                        echo $_SESSION['login'];
                        unset($_SESSION['login']);
                    }
                
                ?>
                <br>

                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br>
                    Categories
                </div>

                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br>
                    Categories
                </div>

                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br>
                    Categories
                </div>

                <div class="col-4 text-center">
                    <h1>5</h1>
                    <br>
                    Categories
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Main content Section Fin -->

        <?php include('partials/footer.php')?>