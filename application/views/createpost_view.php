<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Create Post</title>

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
                    <a href="<?php echo base_url();?>index.php/dashboard">Dashboard</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>index.php/createpost">Create</a>
                </li>
                <li>
                    <a href="<?php echo base_url();?>index.php/login/logout">Logout</a>
                </li>
            </ul>
        </div>
                <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                            <div class="row">
                                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Toggle Menu</a>
                                <div class="col-md-10">
                                    <?php echo form_open('createpost/createPost'); ?>
                                        <div class="form-group">
                                            <label for="name" class="col-sm-2 control-label">Title</label>
                                            <div class="col-sm-10">
                                                <?php 
                                                 $opts = 'class="form-control" placeholder="Title" id="title"';
                                                 echo form_input('title', '', $opts); 
                                                ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="message" class="col-sm-2 control-label">Content</label>
                                            <div class="col-sm-10">
                                                <?php 
                                                    $opts = 'class="form-control" placeholder="Content" rows="4" id="content"';
                                                    echo form_textarea('content','', $opts);
                                                 ?>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-5 col-sm-offset-2">
                                                <?php echo form_submit('submit','Log In',"class='btn btn-info btn-block login' style='background-color:#5bc0de; margin-top:10px;'"); ?>
                                                <p id="err" style="margin-top:10px;"></p>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </div>
    </div>
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
    $('form').submit(function () {
        var title = $('#title').val();
        var content = $('#content').val();
        if (title  === '') {
            $('#err').text("Title must be filled.");
            return false;
        }
        else if(content === ''){
            $('#err').text("Content must be filled.");
            return false;
        }
    });
    </script>

</body>

</html>