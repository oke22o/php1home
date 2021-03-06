<!doctype html>
<html lang="en">
<head>
    <?php include ROOT_DIR.'templates/chunks/head.chunk.php' ?>
</head>

<body>


<?php include ROOT_DIR.'templates/chunks/nav.chunk.php' ?>

<main role="main" class="site-main main">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading"><?= $pageH1 ?></h1>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php
                $images = getPicturesAssoc($mysqlConnect, $galleryType);
                foreach ($images as $image) {
                    include '../templates/chunks/gallery_item.php';
                }
                ?>
            </div>
        </div>
    </div>
</main>

<?php include ROOT_DIR.'templates/chunks/javascript.chunk.php' ?>
</body>
</html>

