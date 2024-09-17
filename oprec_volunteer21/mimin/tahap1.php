<?php
require_once('../koneksi.php');
require_once('sesi_admin.php');
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Form Panitia Oprec Volunteer 2021/2022</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                                <div class="m-b-md text-center">
                                    <img alt="image" class="img-circle" src="https://fikti.bem.gunadarma.ac.id/wp-content/uploads/BEM-FIKTI-logo.png" width="60px" />
                                    <div><a href="https://fikti.bem.gunadarma.ac.id" rel="nofollow" target="_blank">
                                            BEM FIKTI UNIVERSITAS GUNADARMA </a></div>
                                </div>
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">Mimin</strong>
                                    </span> <span class="text-muted text-xs block">Sang Penentu Oprec <b class="caret"></b></span> </span> </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="https://fikti.bem.gunadarma.ac.id">Profil BEM</a></li>
                                <li class="divider"></li>
                                <li><a href="?ak=logout" onclick="return confirm('Apakah kamu yakin ingin Logout?')">Logout</a></li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            BEM FIKTI
                        </div>
                    </li>
                    <li style="background-color: #293846; color: white;">
                        <a href="tahap1.php"><i class="fas fa-paste"></i> <span class="nav-label">Daftar peserta tahap 1</span></a>
                    </li>
                    <li>
                        <a href="tahap2.php"><i class="far fa-id-card"></i> <span class="nav-label">Daftar peserta tahap 2</span></a>
                    </li>
                    <li>
                        <a href="tahaplulus.php"><i class="far fa-check-square"></i> <span class="nav-label">Daftar peserta lulus</span></a>
                    </li>
                    <li>
                        <a href="settings.php"><i class="fas fa-cogs"></i> <span class="nav-label">Settings</span></a>
                    </li>

                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" action="">

                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">

                        <li>
                            <a href="?ak=logout" onclick="return confirm('Apakah kamu yakin ingin Logout?')">
                            <i class="fas fa-sign-out-alt"></i> Log out
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
            <?php
            require('view/tahap1.php');
            ?>


            <div class="footer">
                <div>
                    <p title="Farhan"><strong>Maintained by BIRO PTI 2021/2022</strong><br /> BEM FIKTI UG.</p>
                </div>
            </div>

        </div>
    </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {
            $('.dataTables-example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [{
                        extend: 'copy'
                    },
                    {
                        extend: 'csv'
                    },
                    {
                        extend: 'excel',
                        title: 'ExampleFile'
                    },
                    {
                        extend: 'pdf',
                        title: 'ExampleFile'
                    },

                    {
                        extend: 'print',
                        customize: function(win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

        });
    </script>

</body>

</html>