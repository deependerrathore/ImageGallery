<?php include('init.php'); ?>
<div class="container-fluid">
<div class="col-sm-9 col-md-10">
  
    <!-- Page Heading -->
    <div class="row">
      <div class="col-lg-12">
        <h1>
          Admin
          <small>Subheading</small>
        </h1>

        <?php  
          $sql = "SELECT * FROM users WHERE id=1";
          $result = $database->query($sql);

          $user_found= mysqli_fetch_array($result);
          echo $user_found['username'];



        ?>





        <ol class="breadcrumb">
          <li>
            <i class="fa fa-dashboard"></i><a href="index.html">Dashboard</a>
          </li>
          <li class="active">
            <i class="fa fa-file"></i> Blankpage
          </li>
        </ol>

      </div>
    </div>
  </div>
</div>