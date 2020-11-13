<?php require_once("../resources/config.php"); ?>
<?php defined("FILE_NAME") ? null : define("FILE_NAME", get_file_name(__FILE__)); ?>

<!DOCTYPE html>
<html lang="en">

<?php include(TEMPLATE_FRONT . DS . FILE_NAME . DS . "header.php") ?>
<!-- filename -->

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <?php include(TEMPLATE_FRONT . DS . FILE_NAME . DS . "top_nav.php") ?>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <!-- side_nav -->
            <div class="col-md-3">
                <?php include(TEMPLATE_FRONT . DS . FILE_NAME . DS . "side_nav.php") ?>
            </div>
            <!-- side_nav end-->
            <div class="col-md-9">
                <div class="row carousel-holder">
                    <!-- slide -->
                    <div class="col-md-12">
                        <?php include(TEMPLATE_FRONT . DS . FILE_NAME . DS . "slider.php") ?>
                    </div>
                    <!-- slide end-->
                </div>
                <div class="row">
                    <?php include(TEMPLATE_FRONT . DS . FILE_NAME . DS . "products.php") ?>
                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <h4><a href="#">Like this template?</a>
                        </h4>
                        <p>If you like this template, then check out <a target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">this
                                tutorial</a> on how to build a working review system for your online store!</p>
                        <a class="btn btn-primary" target="_blank" href="http://maxoffsky.com/code-blog/laravel-shop-tutorial-1-building-a-review-system/">View
                            Tutorial</a>
                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    　　<?php include(TEMPLATE_FRONT . DS . FILE_NAME . DS . "footer.php") ?>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>