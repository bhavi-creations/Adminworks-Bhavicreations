 <!DOCTYPE php>
 <php lang="en">

     <head>

         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <meta name="description" content="">
         <meta name="author" content="">

         <title>Bhavi Creations - Login</title>

         <!-- Custom fonts for this template-->
         <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
         <link
             href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
             rel="stylesheet">

         <!-- Custom styles for this template-->
         <link href="css/sb-admin-2.min.css" rel="stylesheet">

     </head>

     <body class="bg-gradient-primary">

         <div class="container">

             <!-- Outer Row -->
             <div class="row justify-content-center">

                 <div class="col-xl-10 col-lg-12 col-md-9">

                     <div class="card o-hidden border-0 shadow-lg my-5">
                         <div class="card-body p-0">
                             <!-- Nested Row within Card Body -->
                             <div class="row">
                                 <div class="col-lg-6 d-flex justify-content-center align-items-center ">
                                     <img src="img/foot_bhavi_logo.webp" alt="login image" class="img-fluid d-none d-lg-block">
                                 </div>
                                 <!-- <div class="col-lg-6 d-none d-lg-block   ">
                            <img src="img/nnnnnnn.png" alt="login image" class="img-fluid  mx-auto">
                            </div> -->
                                 <div class="col-lg-6">
                                     <div class="p-5">
                                         <div class="text-center">
                                             <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                         </div>


                                         <form class="user" action="../includes/login_handler.php" method="POST">
                                             <div class="form-group">
                                                 <input type="email" class="form-control form-control-user" id="email" name="email" required placeholder="Email Address">

                                             </div>
                                             <div class="form-group">
                                                 <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                             </div>

                                             <div class="form-group">
                                                 <div class="custom-control custom-checkbox small">
                                                     <input type="checkbox" class="custom-control-input" id="customCheck">
                                                     <label class="custom-control-label" for="customCheck">Remember
                                                         Me</label>
                                                 </div>
                                             </div>
                                             <a href="index.php">
                                                 <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                             </a>

                                         </form>




                                         <?php
                                            if (isset($_GET['error'])) {
                                                echo "<p style='color:red;'>" . htmlspecialchars($_GET['error']) . "</p>";
                                            }
                                            ?>

                                         <hr>

                                         <div class="text-center">
                                             <a class="small" href="register.php">Create an Account!</a>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>

                 </div>

             </div>

         </div>





         <!-- Bootstrap core JavaScript-->
         <script src="vendor/jquery/jquery.min.js"></script>
         <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

         <!-- Core plugin JavaScript-->
         <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

         <!-- Custom scripts for all pages-->
         <script src="js/sb-admin-2.min.js"></script>

     </body>

 </php>