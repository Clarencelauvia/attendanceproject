<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <title>Login Form</title>
</head>
<style>
    .but a{
        margin-left:20pc;
        margin-top:-50px;
    }
    section{
        display:grid;
        gap:20px;
        grid-template-columns:2fr 2fr;
    }
    input, select{
        border:none;
    }
    hr{
        margin-top:-5px;
    }
    .p2{
        margin-top:-5px;
    }
    form{
     margin-left:100px;
     box-shadow:10px 10px 10px black, -10px -10px 10px black;
    }
    h1{
        text-shadow:2px 2px 2px black;
    }
    #lo{
        text-shadow:2px 2px 2px grey;
    }
    #ho{
        margin-left:300px;
    }
    
   
</style>
<body class="mx-auto">
    <div class="container mx-auto">
        <?php if(isset($_GET['error']) && $_GET['error'] == 'invalidrequest'):
        ?>
          <span class="form-control text-center">
        <?php 
        echo $_GET['message'];
        ?>
        <button type='button' class="btn-close" data-bs-dismiss = 'alert' aria-label = 'close'></button>
    </span>
    <?php endif ?>
        <h1 class="text-center text-danger fs-3">Attendance Management System</h1>
        <form action="action.php" method="POST" class="w-75">

        <div class="contain text-center">
            <div class="row">
              <div class="col">
                 <img src="eschosys.PNG" alt="eschosysPNG">
                      </div>
                      <div class="col w-100">
                          <h2 class="fw-bolder">ESCHOSYS TECHNOLOGIES</h2>
                            <p class="p1 fw-bolder">EDUCATIONAL & IT TRAINING CENTER </p>
                                 <!-- <P class="P2 fw-bold ">ATTENDANCE FORM</P> -->
               </div>
    <div class="col">
      <p class="mt-5 fw-bolder " id="lo">Hardwork Beats Talent when Talent Refuses to Work</p>
    </div>
  </div>
</div> <hr>
<div class="but"><a href="#" class="btn btn-danger rounded fw-bolder ml-5 ">ATTENDANCE FORM</a></div>

     <p class="text-danger fw-bolder">PERSONAL INFORMATION</p>
      <div class="content">
        <section class="sect1">
        <div class="div1">
        <label for="full" class="">FullName:</label><br>
        <input type="text" placeholder="Enter Full Name" name="full" class="w-100"><hr>
        </div>
        <div class="div2">
        <label for="user">UserName</label><br>
        <input type="text" placeholder="Enter User Name" name="user" class="w-100"><hr>
        </div>
        </section>
        <section class="sect2 mt-4">
       <div class="div3">
       <label for="pass">Password</label><br>
       <input type="password" placeholder="Enter Password" name="pass" class="w-100"><hr>
       </div>
    <div class="div4">
    <label for="confirm">Confirm Passsword</label><br>
    <input type="password" placeholder="Confirm Password " name="confirm" class="w-100"><hr>
    </div>
        </section>
        <section class="sect3 mt-4">
              <div class="div5">
              <label for="email">Email Address</label><br>
              <input type="email" placeholder="Enter Email Address" name="email" class="w-100"><hr>
              </div>
          <div class="div6">
          <label for="gender">Gender</label><br>
            <select name="gender" id="gender" class="w-100">
                <option value="Male">Male</option>
                <option value="Female">Female </option>
            </select><hr>
          </div>
        </section>
        <section class="sect4 mt-4">
         <div class="div7">
         <label for="phone">Phone Number</label><br>
         <input type="number" name="phone" placeholder="+237" min="0" min-lenght="6" class="w-100"><hr>
         </div>
         <div class="div8">
         <label for="country">Country</label><br>
            <select name="country" id="country" class="w-100">
                <?php
            $countrys =  __DIR__ . '/country.json';
            if(file_exists($countrys)):
                $countrys = file_get_contents($countrys);
                $countrys = json_decode($countrys); ?>

                <?php
                foreach($countrys as $country):
                ?>
                <option value="<?=$country->name ?>"> <?=$country->name ?></option>
                <?php endforeach ?>
                <?php endif ?>
                
                
            </select><hr>
         </div>
            

        </section>
        <div class="bg-danger text-danger mt-3">hhhijjih</div>
        <button class="btn btn-secondary fs-5 fw-bold w-25 mt-4 " id="ho">SUBMIT</button>
      </div>

   




        </form>

    </div>
   











<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>