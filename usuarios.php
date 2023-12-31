<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | DataTables</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
<!--perfil de usuario-->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="fa-solid fa-gear"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="perfil.php" class="dropdown-item">
            <i class="fa-solid fa-user"></i>Perfil
          </a>
          <a href="index.html" class="dropdown-item dropdown-footer">Salir</a>
        </div>
      </li>
    </ul>
  </nav>  <!-- /.navbar -->
<!--/perfil de usuario-->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard_inicio.html" class="brand-link">
      <span class="brand-text font-weight-light">DiscoverGigant</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard_inicio.html" class="nav-link">
              <i class="fa-solid fa-house"></i>
              <p>
                Inicio
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="usuarios.php" class="nav-link active">
              <i class="fa-solid fa-users"></i>
              <p>
                Usuarios
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Informes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>  
        </ul>
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
            <h1>Alumnos</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Alumnos</li>
            </ol>
          </div>
        </div>
        <button class="btn btn-primary" data-toggle="modal" data-target="#ventanamodal">
          Registrar Alumno
        </button>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!--modal-->
        <div class="modal" id="ventanamodal" aria-labelledby="modal-title" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Registro de Estudiantes</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <!--form-->
                <form>
                  <div class="card-body">

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-grup">
                          <label for="exampleInputNombres">Nombres</label>
                          <input type="text" class="form-control" id="exampleInputNombres" placeholder="Escribir nombres" name="nombres">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-grup">
                          <label for="exampleInputApellidos">Apellidos</label>
                          <input type="text" class="form-control" id="exampleInputApellidos" placeholder="Escribir apellidos" name="apellidos">
                        </div>
                      </div>
                    </div>

                    <div class="col-md-12">
                    <div class="form-grup">
                  <select class="form-select" name="tipo_documento">
                    <option selected disabled>tipo de documento</option>
                    <?php
                        include 'conexion.php';
        
                        $sql = $conn->query("SELECT * FROM documentos");
                        while ($resultado = $sql->fetch_assoc()) {
                            echo "<option value='".$resultado['Id_documento']."'>".$resultado['Tipo_documento']."</option>";
                        }
                    ?>
                </select>
            </div>
                      </div>
            <div class="form-grup">
              <input type="number" aria-label="documento"name="documento" class="form-control" placeholder="Numero de documento" id="documento" required>
            </div>

                    <div class="form-grup">
                      <label for="exampleInputEmail">Correo electronico</label>
                      <input type="text" class="form-control" id="exampleInputEmail" placeholder="Escribir Correo electronico" name="email">
                    </div>

                    <div class="form-grup">
                      <label for="exampleInputCel">Celular</label>
                      <input type="number" class="form-control" id="exampleInputCel" placeholder="Escribir # de celular" name="celular">
                    </div>

                    <div class="col-md-6">
              <select class="form-select" name="genero" required>
                    <option selected disabled>Genero</option>
                    <?php
                        include 'conexion.php';
        
                        $sql = $conn->query("SELECT * FROM genero");
                        while ($resultado = $sql->fetch_assoc()) {
                            echo "<option value='".$resultado['Id_genero']."'>".$resultado['Genero']."</option>";
                        }
                    ?>
                </select>
            </div>

            <div class="col-md-6">
              <h6>fecha de nacimiento</h6>
              <input type="date" id="fecha" name="fecha" required>
              
              <script>
                function mostrarFecha() {
                  var fecha = document.getElementById("fecha").value;
                  alert("La fecha seleccionada es: " + fecha);
                }
              </script>
            </div>

                  </div>
                </form>
                <!--/form-->
              </div>
                <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary">Registrar</button>
                </div>
              </div>
              <!--/modal content-->
            </div>
            <!--/modal dialog-->
          </div>
        </div>
        <div class="row">
          <div class="col-12">
              <!-- /.card-header -->
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Estudiantes Registrados</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
              <tr>
                    <th>Id</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Tipo documento</th>
                    <th>Documento</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Genero</th>
                    <th>Fecha de nacimiento</th>
                    <th>Jornada</th>
                    <th>Grado</th>
                    <th>Grupo</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    require 'conexion.php';
                
                    $sql= $conn->query ("SELECT * FROM alumnos 
                      INNER JOIN documentos ON alumnos.Id_documento = documentos.Id_documento 
                      INNER JOIN genero ON alumnos.Id_genero = genero.Id_genero 
                      INNER JOIN jornada ON alumnos.Id_jornada = jornada.Id_jornada 
	                    INNER JOIN grado ON alumnos.Id_grado = grado.Id_grado 
	                    INNER JOIN grupo ON alumnos.Id_grupo = grupo.Id_grupo");
                     
                     while ($resultado = $sql->fetch_assoc()) {

                    ?>
                  <tr>
                        <th scope="row"><?php echo $resultado['Id']?></th>
                        <th scope="row"><?php echo $resultado['Nombres']?></th>
                        <th scope="row"><?php echo $resultado['Apellidos']?></th>
                        <th scope="row"><?php echo $resultado['Tipo_documento']?></th>
                        <th scope="row"><?php echo $resultado['Documento']?></th>
                        <th scope="row"><?php echo $resultado['Email']?></th>
                        <th scope="row"><?php echo $resultado['Telefono']?></th>
                        <th scope="row"><?php echo $resultado['Genero']?></th>
                        <th scope="row"><?php echo $resultado['Fecha_nacimiento']?></th>
                        <th scope="row"><?php echo $resultado['Jornada']?></th>
                        <th scope="row"><?php echo $resultado['Grado']?></th>
                        <th scope="row"><?php echo $resultado['Grupo']?></th>

                        <?php
                     }
                    ?>
                    </tr>
                    </tbody>
                  </table>
                  
        <!-- /.row -->
    
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap4.min.js"></script>
<script src="js/dataTables.responsive.min.js"></script>
<script src="js/responsive.bootstrap4.min.js"></script>
<script src="js/dataTables.buttons.min.js"></script>
<script src="js/buttons.bootstrap4.min.js"></script>
<script src="js/jszip.min.js"></script>
<script src="js/pdfmake.min.js"></script>
<script src="js/vfs_fonts.js"></script>
<script src="js/buttons.html5.min.js"></script>
<script src="js/buttons.print.min.js"></script>
<script src="js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>