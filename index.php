<?php
include "connection.php";

$dbname = 'info';


$q = mysqli_query($connect, "SHOW TABLES");
//
// printf(mysqli_num_rows($q));
// print_r( mysqli_fetch_all($q)[0]);

//$arr = mysqli_fetch_all($q);

// print_r($arr[0]);
// print_r($arr[1]);

// while ($i < mysqli_num_rows($q)){
//   print_r($arr[$i]);
//
//   $i++;
// }

 ?>

  <!doctype html>
  <html lang="ru">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="">
      <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
      <meta name="generator" content="Hugo 0.88.1">
      <title>Сатистика по классам</title>

      <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

      <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

      <style>
        .bd-placeholder-img {
          font-size: 1.125rem;
          text-anchor: middle;
          -webkit-user-select: none;
          -moz-user-select: none;
          user-select: none;
        }

        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
      </style>


      <!-- Custom styles for this template -->
      <link href="dashboard.css" rel="stylesheet">
    </head>
    <body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Школа ИТШ</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> -->
    <!-- <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="#">Sign out</a>
      </div>
    </div> -->
  </header>



  <div class="container-fluid">
    <div class="row">



      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">




          <ul class="nav flex-column">

            <li class="nav-item active">
              <a class="nav-link" href="#">
                <span data-feather="file"></span>
                О нас
              </a>
            </li>

          </ul>



          <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
            <span>Информация</span>
            <a class="link-secondary" href="#" aria-label="Add a new report">
              <span data-feather="plus-circle"></span>
            </a>
          </h6>
          <ul class="nav flex-column mb-2">
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span data-feather="file-text"></span>
                Последний месяц
              </a>
            </li>

          </ul>
        </div>

      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Доска</h1>
          <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
              <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
              <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
            </div>
            <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
              <span data-feather="calendar"></span>
              Неделя
            </button>
          </div>
        </div>


<?php print_r($arr[$i]); ?>


        <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

        <!-- <nav id="navbar-example2" class="navbar navbar-light bg-light px-3">
          <h1 class="" href="#">Информация</h1>
          <ul class="nav nav-pills">
            <li class="nav-item">
              <a class="nav-link" href="#scrollspyHeading1">First</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#scrollspyHeading2">Second</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Dropdown</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#scrollspyHeading3">Third</a></li>
                <li><a class="dropdown-item" href="#scrollspyHeading4">Fourth</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#scrollspyHeading5">Fifth</a></li>
              </ul>
            </li>
          </ul>
        </nav> -->
        <!-- <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
          <h4 id="scrollspyHeading1">First heading</h4>
          <p>...</p>
          <h4 id="scrollspyHeading2">Second heading</h4>
          <p>...</p>
          <h4 id="scrollspyHeading3">Third heading</h4>
          <p>...</p>
          <h4 id="scrollspyHeading4">Fourth heading</h4>
          <p>...</p>
          <h4 id="scrollspyHeading5">Fifth heading</h4>
          <p>...</p>
        </div> -->
        <div class="alert alert-danger" role="alert">
  Превышение нормы, проверьте класс!
</div>

                      <?php

                      $i = 1;
                      while ($tableName = mysqli_fetch_row($q)){
                        $table = $tableName[0];
                        $scrollspyHeading = "scrollspyHeading$i";

                         ?>
                         <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">

                         <h2 id="<?php $scrollspyHeading; ?>"> <?php echo $table; ?></h2>
                         <div class="table-responsive">


                           <table class="table table-striped table-sm">
                             <thead>
                               <tr>
                                 <th scope="col">Дата</th>
                                 <th scope="col">Время</th>
                                 <th scope="col">Температура в классе</th>
                                 <th scope="col">Влажность в классе </th>
                                 <th scope="col">Уровень освещения в классе</th>
                                 <th scope="col">Заряд датчиков</th>
                                 <th scope="col">Работоспособность станции</th>
                               </tr>
                             </thead>
                             <tbody>


                               <?php
                               $result = mysqli_query($connect, "SELECT * FROM `$table`");
                               while ($output = mysqli_fetch_assoc($result)) {
                                 $num = $output['temp'];



                                  ?>
                                 <tr>

                                   <td><?php echo $output['date'] ?></td>
                                   <td><?php echo $output['time'] ?></td>
                                   <td><?php echo $output['temperature'] ?></td>
                                   <td><?php echo $output['humidity'] ?></td>
                                   <td><?php echo $output['light'] ?></td>
                                   <td><?php echo $output['charge'] ?></td>
                                   <td><?php echo $output['level'] ?></td>

                                 </tr>

                                 <div class="block" data-attr="<?php echo $output['temp'] ?>"></div>
                                 <?php
                               }
                                ?>


                             </tbody>
                           </table>

                          </div>

                        </div>
                        <?php
                          $i++;
                      }
                       ?>



      </main>






    </div>
  </div>


      <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
    </body>
  </html>
