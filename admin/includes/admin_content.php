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
        /*
          $result_set = User::find_all_users();
          
          while($row = mysqli_fetch_array($result_set)){
            echo $row['username'] . "<br>";
          }
        */
          $found_user = User::find_user_by_id(2);

          echo $found_user['username'];

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