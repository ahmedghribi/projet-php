<?php session_start();
include_once 'includes/security.php';
include_once 'includes/connexion.php';

//initialisation des variables $controleur et $action 
$controller = 'produit';
$action = 'liste';

//Recupération 
if (isset($_REQUEST['controller']))
  $controller = $_REQUEST['controller'];
if (isset($_REQUEST['action']))
  $action = $_REQUEST['action']; ?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Coffee </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="" class="nav-link"> Utilisateur : <?php echo $_SESSION['nom']?></a>
        </li>
        
        <li class="nav-item d-none d-sm-inline-block">
          <a href="index.php?controller=serveur&action=view" class="nav-link"> Caisse </a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
          <a href="login.php?controller=admin&action=logout" class="nav-link">Déconnectez vous <?php echo $_SESSION['nom']?></a>
        </li>
        </ul>

        <li id="div_horloge" style="float: left"> 

          <script type="text/javascript">
            window.onload = function() {
              horloge('div_horloge');
            };

            function horloge(el) {
              if (typeof el == "string") {
                el = document.getElementById(el);
              }

              function actualiser() {
                var date = new Date();
                var str = date.getHours();
                str += ':' + (date.getMinutes() < 10 ? '0' : '') + date.getMinutes();
                str += ':' + (date.getSeconds() < 10 ? '0' : '') + date.getSeconds();
                el.innerHTML = str;
              }
              actualiser();
              setInterval(actualiser, 1000);
            }
          </script>
        </li>
        
     
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle " style="opacity: .8">
        <span class="brand-text font-weight-light">Coffee</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="login.php?controller=admin&action=logout" class="d-block">Déconnexion</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <?php if ($_SESSION['role'] == 0) { ?>

              <li class="nav-item has-treeview">
                <a href="dashboard_dashboard_index.html" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Tableau de Board
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fab fa-foursquare"></i>
                  <p>
                    Gestion des Familles 
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="famille_famille_add1.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Ajouter Famille</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="famille_famille_liste.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>liste des Familles</p>
                    </a>
                  </li>

                </ul>
              </li>
              
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fab fa-product-hunt"></i>
                <p>
                  Gestion des produits 
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="produit_produit_add1.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ajouter un produit</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="produit_produit_liste.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>liste des produits</p>
                  </a>
                </li>

              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-users-cog"></i>
                <p> 
                  Gestion des admins
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="admin_admin_add1.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ajouter SUPERUSER</p>
                  </a>
                  <a href="admin_admin_add2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ajouter un Serveur</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="admin_admin_liste.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>liste des Utilisateurs</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-mug-hot"></i>
                <p>
                  Gestion des Clients 
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="client_client_add1.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ajouter un Clients</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="client_client_liste.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Liste des Cients</p>
                  </a>
                </li>
              </ul>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon fab fa-tumblr"></i>
                <p>
                  Gestion Types Clients 
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="typeclient_typeclient_add1.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Ajouter Type Client</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="typeclient_typeclient_liste.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Liste Types Cients</p>
                  </a>
                </li>
              </ul>



          </ul>
            <?php } ?>
            <?php if ($_SESSION['role'] == 1) { ?>
            <li class="nav-item has-treeview">
                <a href="index.php?controller=serveur&action=view" class="nav-link">
                  <i class="nav-icon fas fa-money-bill-alt"></i> 
                  <p>
                    Caisse
                 
                  </p>
                </a>
              </li>
              <?php } ?>
        
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>La Gestion du Café ... Au Quotidien </h1>
            </div>
       
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-12">



            <?php include 'controllers/' . $controller . '.controller.php'; ?>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables -->
  <script src="plugins/datatables/jquery.dataTables.js"></script>
  <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- page script -->
  <script>
    $(function() {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
      });
    });
  </script>
</body>

</html>