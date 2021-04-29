<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Painel Admin | </title>

    <!-- Bootstrap -->
    <link href="<?= base_url('vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url('vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?= base_url('vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?= base_url('vendors/jqvmap/dist/jqvmap.min.css') ?>" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url('vendors/bootstrap-daterangepicker/daterangepicker.css') ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('build/css/custom.min.css') ?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Painel Admin</span></a>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Geral</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Início <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('/') ?>">Dashboard</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Produtos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
						<li><a href="<?= base_url('produto/form') ?>">Adicionar</a></li>
					  	<li><a href="<?= base_url('produto') ?>">Listagem</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> Pedidos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('pedido') ?>">Listagem</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Clientes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
						<li><a href="<?= base_url('cliente') ?>">Listagem</a></li>
                    </ul>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?= $_SESSION['admin'][0]['nome'] ?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item"  href="<?= base_url('painel/logout')?>"><i class="fa fa-sign-out pull-right"></i> Sair</a>
                  </div>
                </li>

              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

		<!-- page content -->
		<div class="right_col" role="main">
		<?= $contents ?>
		</div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Desenvolvido por Willian</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('vendors/jquery/dist/jquery.min.js') ?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('vendors/bootstrap/dist/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- FastClick -->
    <script src="<?= base_url('vendors/fastclick/lib/fastclick.js') ?>"></script>
    <!-- NProgress -->
    <script src="<?= base_url('vendors/nprogress/nprogress.js') ?>"></script>
    <!-- Chart.js -->
    <script src="<?= base_url('vendors/Chart.js/dist/Chart.min.js') ?>"></script>
    <!-- gauge.js -->
    <script src="<?= base_url('vendors/gauge.js/dist/gauge.min.js') ?>"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?= base_url('vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') ?>"></script>
    <!-- iCheck -->
    <script src="<?= base_url('vendors/iCheck/icheck.min.js') ?>"></script>
    <!-- Skycons -->
    <script src="<?= base_url('vendors/skycons/skycons.js') ?>"></script>
    <!-- Flot -->
    <script src="<?= base_url('vendors/Flot/jquery.flot.js') ?>"></script>
    <script src="<?= base_url('vendors/Flot/jquery.flot.pie.js') ?>"></script>
    <script src="<?= base_url('vendors/Flot/jquery.flot.time.js') ?>"></script>
    <script src="<?= base_url('vendors/Flot/jquery.flot.stack.js') ?>"></script>
    <script src="<?= base_url('vendors/Flot/jquery.flot.resize.js') ?>"></script>
    <!-- Flot plugins -->
    <script src="<?= base_url('vendors/flot.orderbars/js/jquery.flot.orderBars.js') ?>"></script>
    <script src="<?= base_url('vendors/flot-spline/js/jquery.flot.spline.min.js') ?>"></script>
    <script src="<?= base_url('vendors/flot.curvedlines/curvedLines.js') ?>"></script>
    <!-- DateJS -->
    <script src="<?= base_url('vendors/DateJS/build/date.js') ?>"></script>
    <!-- JQVMap -->
    <script src="<?= base_url('vendors/jqvmap/dist/jquery.vmap.js') ?>"></script>
    <script src="<?= base_url('vendors/jqvmap/dist/maps/jquery.vmap.world.js') ?>"></script>
    <script src="<?= base_url('vendors/jqvmap/examples/js/jquery.vmap.sampledata.js') ?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= base_url('vendors/moment/min/moment.min.js') ?>"></script>
    <script src="<?= base_url('vendors/bootstrap-daterangepicker/daterangepicker.js') ?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('build/js/custom.min.js') ?>"></script>
	
  </body>
</html>
