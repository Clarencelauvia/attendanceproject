<?php

$db_File_Path = __DIR__ . '/database.php';
require $db_File_Path;

$query = "SELECT * FROM attendance";

$result = mysqli_query($connection, $query);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATABASE</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<style>
   
</style>
<body>
    <div class="container mx-auto ">
    <button class="btn btn-danger w-100 fs-30 fw-bolder ps-20" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"> <span class="auto  w-100 h-100">ATTENDANCE MANAGEMENT SYSTEM DATABASE</span></button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header color-white bg-black text-white">
    <h5 class="offcanvas-title w-100 fs-100 fw-bolder" id="offcanvasWithBothOptionsLabel"> ATTENDANCE MANAGEMENT SYSTEM</h5>
    <button type="button" class="btn-close bg-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body bg-white text-dark">
  <div class="container-fluid">
    <a class="navbar-brand fw-bolder fs-5" href="/login2/dashboard.php">
      <img src="dash.PNG" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      DASHBOARD
    </a>
  </div><br><br>
  <!-- <a href="#" class="text-white fw-bolder fs-60">DASHBOARD</a> <br> -->
  <div class="container-fluid">
    <a class="navbar-brand fw-bolder fs-5" href="#">
      <img src="admin.PNG " alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      ADMIN
    </a>
  </div> <br><br>
  <!-- <a href="#">USER</a><br> -->
  <div class="container-fluid">
    <a class="navbar-brand fw-bolder fs-5" href="#">
      <img src="user.PNG" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      USER
    </a>
  </div>

  </div>
</div>
        <table  class="table table-striped mt-5 border w-100">
            <thead>
                <tr class="w-100">
                    <th>ID</th>
                    <th>FULLNAME</th>
                    <th>USERNAME</th>
                    <th>PASSWORD</th>
                    <th>EMAIL</th>
                    <th>GENDER</th>
                    <th>PHONE</th>
                    <th>COUNTRY</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php if(mysqli_num_rows($result)>0): ?>
                <?php  while($debts=mysqli_fetch_assoc($result)):?>

                    <tr class=" even:bg-state-200 w-100">
                        <td><?= $debts['id'] ?></td>
                        <td><?=$debts['fullname'] ?></td>
                        <td><?=$debts['username'] ?></td>
                        <td><?=$debts['password'] ?></td>
                        <td><?=$debts['email'] ?></td>
                        <td><?=$debts['gender'] ?></td>
                        <td><?=$debts['phone'] ?></td>
                        <td><?=$debts['country'] ?></td>
                        <td> <a href="edit.php" class="btn btn-success btn-sm w-100">Edit</a></td>
                        <td>
                        <!-- <a href="#" class="btn btn-success w-100">Edit</a> -->
                        <a href="delete.php" class="btn btn-danger btn-sm w-100">Delete</a>
                        </td>
                        
                    </tr>
                    <?php endwhile ?>
                    <?php endif ?>
            </tbody>

        </table>

    </div>


    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script>
</body>
</html>