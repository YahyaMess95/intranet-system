<!doctype html>
<html lang="en">
<!-- Mirrored from demo.dashboardpack.com/fiori-html-pro/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2019 18:30:49 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="Fiori HTML Bootstrap 4 Dashboard Template">
    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <title>Login</title>

    <link href="../main.087c8d15f89e6bbe3f9e.css" rel="stylesheet">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow">
            <div class="app-container">
                <div class="h-100">
                    <div class="h-100 no-gutters row">
                        <div class="d-none d-lg-block col-lg-4">
                            <div class="slider-light">
                                <div class="slick-slider">
                                    <div>
                                      <div class="h-100 d-flex justify-content-center align-items-center bg-premium-dark" tabindex="-1">
                                            <div class="slide-img-bg" style="background-image: url('cover.png'); background-size: relative;"></div>


                                            <div class="slider-content">

                                           
                                              
                                                <h3>Together, we go further</h3>
                                                <p>Because all we care about is your wellfare..</p>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="h-100 d-flex bg-white justify-content-center align-items-center col-md-12 col-lg-8">
                            <div class="mx-auto app-login-box col-sm-12 col-md-10 col-lg-9" style="zoom:80%;">
                               
                                <h4 class="mb-0">
                                    <span class="d-block">Bonjour ,</span>
                               </h4>
                               
                                <div class="divider row"></div>
                                <div>
                               


                               <form action="fonctionLogin.php" method="POST">
                                        <div class="form-row">
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="email" class="text-danger" >Email</label><input name="email" id="email" type="email" class="form-control "></div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="position-relative form-group"><label for="password" class="text-danger">Mot de passe</label><input name="password" id="password"  type="password" class="form-control"></div>
                                        </div>
                                        </div>
                                       
                                        <div class="divider row"></div>
                                        <div class="d-flex align-items-center">
                                            <div class="ml-auto"><U> <a href="javascript:void(0);" class="btn-lg text-danger btn-link" style="zoom:70%; ">Mot de passe oublié?</a></U>
                                                <button class="btn btn-danger btn-lg"  type="submit">Login</button>
                                            </div>
                                            

                                        </div>
                              
</form>














                                </div>
<br>
                                 <div id="txtHint" >  


<?php 

  if (isset($_GET['error'])) {
    echo "<div class='alert alert-danger fade show' role='alert'>Verifier vos données </div>";

}



 ?>

                                 </div>







                            </div>
                        </div>
                    </div>
                </div>
            </div>


    </div>
<script type="text/javascript" src="assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script></body>

<!-- Mirrored from demo.dashboardpack.com/fiori-html-pro/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2019 18:30:51 GMT -->
</html>
