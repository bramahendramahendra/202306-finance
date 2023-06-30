<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta  -->
        <?php $this->load->view('templates/_meta_v', $dataView); ?>

        <title><?=$dataView["titleWebsite"];?></title>

       <!-- CSS  -->
       <?php $this->load->view('templates/_css_v', $dataView); ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Navbar Header  -->
                <?php $this->load->view('templates/_navbarHeader_v', $dataView); ?>

                <!-- Toggle Navigation  -->
                <?php $this->load->view('templates/_toggleNavigation_v', $dataView); ?>

                <!-- <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
                </ul> -->

                <ul class="nav navbar-right navbar-top-links">
                    <!-- Notification  -->
                    <?php $this->load->view('templates/_notification_v', $dataView); ?>
                   
                    <!-- User Setting  -->
                    <?php $this->load->view('templates/_userSetting_v', $dataView); ?>
                </ul>
                <!-- /.navbar-top-links -->
            </nav>

            <!-- sidebar  -->
            <?php $this->load->view('templates/_sidebar_v', $dataView); ?>
            <!-- /.sidebar -->

            <div id="page-wrapper">
                <div class="container-fluid">
                    <!-- Page Header  -->
                    <?php $this->load->view('templates/_pageHeader_v', $dataView); ?>
                   
                    <!-- Content  -->
                    <?= $contents;?>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- javascript -->
        <?php $this->load->view('templates/_javascript_v', $dataView); ?>
        
    </body>

</html>