<?php
include 'Navbar.php';
?>
<!DOCTYPE html>
<html dir="rtl" lang="ar">

    <head>
        <title>تسجيل دخول</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css"  href="L.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">

    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
                <div class="col-lg-6 col-md-6 form-container">
                    <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                        <div class="heading mb-4">
                            <h2>تسجيل دخول</h2>
                        </div>

                        <div class="form-input">
                            <span><i class="fa fa-user-o" aria-hidden="true"></i></span>

                            <input type="textfield" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="الرجاء إدخال أسم المستخدم " required>
                            <span><i class="fa fa-lock" aria-hidden="true"></i></span>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="الرجاء إدخال كلمة المرور" required>
                        </div>
                        <div class="row mb-4">
                            
                            <div class="col-6 text-right">
                                <a href="" class="forget-link text-dark">هل نسيت كلمة المرور؟</a>
                            </div>
                        </div>
                        <div class="text-right mb-3">
                            <button type="submit" class="btn btn-block" onclick="validate();">تسجيل</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script>
        function validate()
        {

            var txt = document.getElementById("exampleInputEmail1");
            var txt1 = document.getElementById("exampleInputPassword1");



            if (txt.value === "")
            {
                txt.style.backgroundColor = "lightblue";
                txt.placeholder = "الرجاء إدخال البريد الإلكتروني ";

            } else {
                txt.style.backgroundColor = "";


            }

            if (txt1.value === "")
            {
                txt1.style.backgroundColor = "lightblue";
                txt1.placeholder = "الرجاء إدخال الرقم السري";
            } else {
                txt1.style.backgroundColor = "";


            }




        }
    </script>

</html>


