


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATABASE</title>
    <link rel="stylesheet" href="/realproject/bootstrap-5.3.3-dist/css/bootstrap.min.css">
</head>
<style>
  div .content{
    margin:auto;
        border-right:10px solid red;
        width: 20pc;
        box-shadow:10px 10px 5px black;
    }
    input{
        border:none;
        margin-left:10px;
        margin-right:10px;
    }
    hr{
        margin-left:10px;
        margin-right:10px;
        margin-top:-2px;
    }
    #but {
        background-image:linear-gradient( 90deg, red , white, red);
        margin-left:30px;
        border-radius:20px;
        box-shadow:5px 5px 1px black;
    }
    a{
        text-decoration:none;
        margin-left:10pc;

    }
    /* background-image:repeating-linear-gradient(  45deg,  blue 10px,
      lightblue 10px,
     blue 30px
    ); */
  
   
</style>
<body>
      <!-- <button class="btn btn-primary w-100 fs-30 fw-bolder ps-20" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"> <span class="auto bg-primary w-100 h-100"></span></button>

<div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
  <div class="offcanvas-header color-white">
    <h5 class="offcanvas-title w-100 fs-100 fw-bolder" id="offcanvasWithBothOptionsLabel"> ATTENDANCE MANAGEMENT SYSTEM</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body bg-black text-white">
  <div class="container-fluid">
    <a class="navbar-brand fw-bolder fs-5" href="#">
      <img src="dash.PNG" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      DASHBOARD
    </a>
  </div> -->
    <div class="container mx-auto   ">
        
      <div class="content mt-5">
      <form action="" class="mt-4 ">
        <h2 class="opacity-75 mt-5 text-center">Login Panel</h2>
        <label for="user" class="mb-1 mt-2 fw-bolder fs-5">Username</label>
        <input type="text" Placeholder="Type Your UserName" name="use" class="mt-3 w-75"><hr><br>
        <label for="word" class="mb-1 fw-bolder fs-5">Password</label>
        <input type="password" placeholder="Type Your Password" name="word" class="mt-3 w-75"><hr><br>
        <button id="but" class=" mb-5 rounded fs-5 fw-bolder w-75">Login</button><br>

        
  <!-- <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
 <label for="">Reset Password</label> -->
 <a href="#" class="mt-3 text-black d-flex flex-end">Forgot password?</a>

        </form>
      </div>
    
            

    </div>


    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"> </script>
</body>
</html>