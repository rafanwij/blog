<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url();?>application/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url();?>application/assets/css/sidebar.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        ICC Blog
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>index.php/dashboard/index/f">Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>index.php/createpost">Create</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>index.php/login/logout">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                            <div class="row">
                                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                                <!-- Blog Entries Column -->
                                <div class="col-md-10">
                                    <!-- First Blog Post -->
                                   <!--  <h2>
                                        Blog Post Title
                                    </h2>
                                    <p class="lead">
                                        by <a href="index.php">Start Bootstrap</a>
                                    </p>
                                    <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
                                    <hr>
                                    <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                                    <hr>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.</p>
                                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a><a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                                    <hr>


                                    <h2>
                                        <a href="#">Blog Post Title</a>
                                    </h2>
                                    <p class="lead">
                                        by <a href="index.php">Start Bootstrap</a>
                                    </p>
                                    <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
                                    <hr>
                                    <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                                    <hr>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, quasi, fugiat, asperiores harum voluptatum tenetur a possimus nesciunt quod accusamus saepe tempora ipsam distinctio minima dolorum perferendis labore impedit voluptates!</p>
                                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                                    <hr>


                                    <h2>
                                        <a href="#">Blog Post Title</a>
                                    </h2>
                                    <p class="lead">
                                        by <a href="index.php">Start Bootstrap</a>
                                    </p>
                                    <p><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:45 PM</p>
                                    <hr>
                                    <img class="img-responsive" src="http://placehold.it/900x300" alt="">
                                    <hr>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, voluptates, voluptas dolore ipsam cumque quam veniam accusantium laudantium adipisci architecto itaque dicta aperiam maiores provident id incidunt autem. Magni, ratione.</p>
                                    <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>

                                    <hr> -->

                                    <!-- Pager -->
                                    <?php echo $text; ?>
                                    <ul class="pager">
                                        <li class="previous" <?php echo $previous; ?> >
                                            <a href="<?php echo base_url();?>index.php/dashboard/newer">&larr; Newer</a>
                                        </li>
                                        <li>
                                            <?php echo $page; ?>
                                        </li>
                                        <li class="next" <?php echo $next; ?> >
                                            <a href="<?php echo base_url();?>index.php/dashboard/older">Older &rarr;</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                </div>
                <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                Delete Confirmation
                            </div>
                            <div class="modal-body">
                                Do you want to delete this post?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-danger btn-ok">Delete</a>
                            </div>
                        </div>
                    </div>
                </div>

        <!-- /#page-content-wrapper -->
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url();?>application/assets/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url();?>application/assets/js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    $('#confirm-delete').on('show.bs.modal', function(e) {
        $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
    });
    </script>

</body>

</html>
