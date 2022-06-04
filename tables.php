<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="home.php">DATA-LOGGER</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
               
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!"><a class="dropdown-item" href="#!">
                            <?php
                            session_start(); 
                            include "db_conn.php";
                            $sql = "SELECT * FROM users";
                            $result = mysqli_query($conn,"$sql");
                            $row = mysqli_fetch_assoc($result);
                            echo"HI ";
                            echo ($row['name']);
                                 ?></a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    
                        
    
                        <div class="card mb-4">
                            <center><div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Table 
                            </div></center>
                            <div

                            <table class='table table-bordered table-striped'>
                            <table id="datatablesSimple">
                            <thead>
                              <tr>
                           <td><p style="color:red">S.N</p></td>
                           <td> <p style="color:red">TEMPERATURE</p> </td>
                            <td> <p style="color:red">HUMIDITY</p> </td>
                            </tr>
                            </thead>
                            <?php
                            $i=0; 
                            include "db_conn.php";
                            $sql = "SELECT * FROM data";
                            $result = mysqli_query($conn,"$sql");
                           while($row = mysqli_fetch_array($result)) {
                             ?>
                                <tr>
                                  <td><?php echo $row["id"]; ?></td>
                                  <td><?php echo $row["temp"]; ?><?php echo" °C ";?> </td>
                                  <td><?php echo $row["hum"]; ?><?php echo" % ";?></td>
                                </tr>
                                <?php
                                  $i++;
                              }
                                    ?>
                               </table>
                            </table>

                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
