<?php
if (session_id() === '') {
    session_start();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Anime Template" />
    <meta name="keywords" content="Anime, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Project Movie | PHP MVC</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Css Styles -->
    <link rel="stylesheet" href="public/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="public/css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="public/css/font-awesome.min.css" type="text/css" />
    <link rel="stylesheet" href="public/css/elegant-icons.css" type="text/css" />
    <link rel="stylesheet" href="public/css/plyr.css" type="text/css" />
    <link rel="stylesheet" href="public/css/nice-select.css" type="text/css" />
    <link rel="stylesheet" href="public/css/owl.carousel.min.css" type="text/css" />
    <link rel="stylesheet" href="public/css/slicknav.min.css" type="text/css" />
    <link rel="stylesheet" href="public/css/style.css" type="text/css" />
</head>

<body>
    <?php
    // Page Preloder -->
    include('partials/preloader.php');

    // Header Section Begin -->
    include('partials/header.php');

    // Hero Section Begin -->
    include('partials/hero.php');

    // Product Section Begin -->
    include('partials/product.php');

    // Footer Section Begin -->
    include('partials/footer.php');

    // Search model Begin -->
    include('partials/search.php');
    ?>

    <!-- Js Plugins -->
    <script src="public/js/jquery-3.3.1.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/player.js"></script>
    <script src="public/js/jquery.nice-select.min.js"></script>
    <script src="public/js/mixitup.min.js"></script>
    <script src="public/js/jquery.slicknav.js"></script>
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/main.js"></script>
</body>

</html>