<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>WanderBlog</title>

    <!-- Foundation CSS -->
    <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">

    <link rel="stylesheet" type="text/css" href="inc/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="inc/owl-carousel/owl.theme.css">

<!--    <link rel="stylesheet" type="text/css" href="inc/slick/slick.css">-->
<!--    <link rel="stylesheet" type="text/css" href="inc/slick/slick-theme.css">-->

    <!-- Sitewide CSS -->
    <link rel="stylesheet" type="text/css" href="css/sitewide.css">

</head>
<body>

    <?php
        session_start();
        include("inc/nav.php");
    ?>

    <div class="row">
        <div class="medium-8 columns">
            <div id="slider" class="owl-carousel owl-theme">

                <a href="#" class="item"><h3>IMAGE TEXT LINK</h3><img src="https://upload.wikimedia.org/wikipedia/commons/7/71/Castle_Liechtenstein.jpg"></a>
                <div class="item"><img src="http://placehold.it/600x450&amp;text=[img]"></div>
                <div class="item"><img src="http://placehold.it/80x80&amp;text=[img]"></div>

            </div>
        </div>
        <div class="medium-4 columns" id="top5">
            <h3>Top 5</h3>
            <?php
                include ("php/top5.php");
            ?>
        </div>
    </div>

    <div class="row medium-8 large-7 columns">
        <?php
            include ("php/posts.php");
        ?>
    </div>
    <script type="text/javascript" src="inc/owl-carousel/owl.carousel.js"></script>
<script>
    $(document).ready(function() {

        $("#slider").owlCarousel({

            navigation : true, // Show next and prev buttons
            slideSpeed : 500,
            paginationSpeed : 400,
            singleItem:true,
            itemsScaleUp : false,
            autoPlay: 4000,
            lazyLoad:true,
            stopOnHover: true

        });

    });
</script>
<p>
    <a href="author/index.php?query=John Doe">John Doe</a>
</p>

</body>
</html>