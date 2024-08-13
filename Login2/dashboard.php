<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <title>DASHBOARD</title>
    <style>
        .container{
            /* margin:auto; */
            box-shadow:10px 10px 5px black;
            
        }
        .content{
            display:grid;
            gap:0px;
            grid-template-columns: 1fr 3fr;
            margin-top:0px;
            /* border-top:5px solid; */
            /* border-bottom:5px solid; */
        }
        /* nav{
            border-top:5px solid;
        } */
        #nav{
            /* border:1px solid red;
            background:red; */
            box-shadow: 5px 0px 1px black;
            width: 13.3pc;
            
            /* height:10vh; */
        }
        .sect2{
            /* box-shadow: -5px -5px 25px black; */
            margin-left:10px;
            margin-right:10px;
            width: 100pc;
        }
        .sect1{
            /* border-right:5px solid black; */
            box-shadow:5px 0px 2px black;
            /* background:red; */
            /* margin-left:-5px ; */
        }
        li, a{
            text-decoration:none;
        }
        li{
            list-style-type:none;
        }
        .sect2 .div1{
            height:7vh;
            margin-left:60px;
            border-radius: 5px 0px 0px 5px ;
        }
        .div1 p{
            margin-top:5px;
            margin-left:15px;
        }
        #la{
            box-shadow:5px 5px 5px black;
        }
       #ma{
        box-shadow:5px 5px 5px black;
       }
       .grid{
        display:grid;
        gap:2px;
        grid-template-columns: 3fr 1fr;
        margin-left:20px;
       }
       #org img{
        width: 20pc;
        margin-left:-100px;
        margin-top:3pc;
        margin-right:7pc;
        
       }
       #lou{
        margin-left:40px;
       }
       #pou{
        color:black;
        text-align:right;
        margin-left:38pc;
        
       }
    </style>
</head>
<body class="bg-white">
    <div class="container">
    <nav class="navbar bg-danger mt-5 w-100">
  <div class="container-fluid ">
    <a id="nav" class="navbar-brand text-black text-center fw-bolder w-25 fs-3">DASHBOARD</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" id="la" type="search" placeholder="Search" aria-label="Search">
      <button class="btn bg-dark text-white btn-outline-dark"id="ma" type="submit">Search</button>
    </form>
  </div>
</nav>
       
<div class="content  w-100">
    <section class="sect1 w-100 bg-danger mt-bolder">
        <ul>
            <li class="mt-5 ">
                <a href="loginpanel.php" class="text-white fs-5 fw-bolder">&#10095LOGIN</a>
            </li>
            <li class="mt-5">
                <a href="#" class="text-white fs-5 fw-bolder"> &#10095 ADMIN</a>
            </li>
            <li class="mt-5">
                <a href="#" class="text-white fs-5 fw-bolder">&#10095USER</a>
            </li>
            <li class="mt-5">
                <a href="#" class="text-white fs-5 fw-bolder">&#10095DATABASE</a>
            </li>
            <li class="mt-5">
                <a href="#" class="text-white fs-5 fw-bolder">&#10095DASHBOARD</a>
            </li>
        </ul>
    </section>
    <section class="sect2 bg-white w-100">
        <form>
        <div class="div1 mt-5 bg-danger text-white  ">
           <p  class="opacity-90 mt-3 fs-6 mt-3 fw-bolder"> ATTENDANCE MANAGEMENT SYSTEM</p>
        </div>
        <div class="grid">
        <div>
        <div class="inp1 mt-4 w-50 ">

        <label for="name" class="fw-bold">Name</label>
            <input type="text" class="form-control" placeholder="Enter Your Name" name="admin">
        </div>
        <div class="inp2 mt-3 w-50 ">
            <label for="pass" class="fw-bold">Password</label>
            <input type="password" class="form-control" placeholder="Enter Your password" name="admos">
        </div>
        <div class="inp3 mt-3 align-content-center w-50 ">
            <label for="hier" class="fw-bold">Hierarchy</label>
            <select name="hier" id="hier" class="form-control ">
            <?php
            $statuses = __DIR__ ."/hierachy.json";
            if(file_exists($statuses)):
                $statuses = file_get_contents($statuses);
                $statuses = json_decode($statuses); ?>
             <?php
                foreach($statuses as $statuse):
                ?>
            
              <option value="<?=$statuse->name?>"><?=$statuse->name ?></option>
            <?php endforeach ?>
            <?php endif ?>
            
            </select>
        </div>
        <div class="inp4 mt-3 w-50  ">
            <label for="batch" class="fw-bold">Batch Number</label>
            <input type="number"  placeholder=" Batch Number" class="form-control" min="1">
           
        </div>
        <button id="lou" class="btn btn-dark w-25 mt-3">Login</button>
                </div>
                </form>
                <div class="mt-5 w-100" id="org">
                    <img src="eschosys.PNG" alt="">
                </div>
                </div>

              <div class="mt-3 mb-2">  <a href="#" id="pou">Not An Admin?Login as User</a></div>
    </section>
 
</div>






















    </div>
    

























<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>