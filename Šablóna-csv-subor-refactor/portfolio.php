<!DOCTYPE html>
<html lang="en">
<?php
include('partials/header.php');
include('partials/body_header.php');
?>

<main>
    <section class="banner">
        <div class="container text-white">
            <h1>Portfólio</h1>
        </div>
    </section>
    <section class="container">
        <?php
            $menuObj = new main\Menu();

            $portfolio = $menuObj->preparePortfolio(2,6);

            foreach ($portfolio as $key => $value ){
                echo '<div class="row">';

                foreach ($value as $key => $indexCol) {
                    echo ' <div class="col-25 portfolio text-white text-center" id="portfolio-'. $indexCol . '">
                     Web Stranka '.$indexCol .'</div>';
                }
                echo '</div>';
            }
        ?>
<!--        <div class="row">-->
<!--          <div class="col-25 portfolio text-white text-center" id="portfolio-1">-->
<!--              Web stránka 1-->
<!--          </div>-->
<!--            <div class="col-25 portfolio text-white text-center" id="portfolio-2">-->
<!--                Web stránka 2-->
<!--            </div>-->
<!--            <div class="col-25 portfolio text-white text-center" id="portfolio-3">-->
<!--                Web stránka 3-->
<!--            </div>-->
<!--            <div class="col-25 portfolio text-white text-center" id="portfolio-4">-->
<!--                Web stránka 4-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-25 portfolio text-white text-center" id="portfolio-5">-->
<!--                Web stránka 5-->
<!--            </div>-->
<!--            <div class="col-25 portfolio text-white text-center" id="portfolio-6">-->
<!--                Web stránka 6-->
<!--            </div>-->
<!--            <div class="col-25 portfolio text-white text-center" id="portfolio-7">-->
<!--                Web stránka 7-->
<!--            </div>-->
<!--            <div class="col-25 portfolio text-white text-center" id="portfolio-8">-->
<!--                Web stránka 8-->
<!--            </div>-->
<!--        </div>-->
    </section>

</main>
<?php
include('partials/footer.php');
?>
<script src="js/app.js"></script>
</body>
</html>