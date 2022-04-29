<?php
include 'AdminHeader.php';
?>
<!DOCTYPE html>

<html dir="rtl" lang="ar">

    <head>
        <title>إضافة جهة مستفيدة</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css"  href="LoginPage.css">
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">

        <style>
            .image-container
{
    background: url(ii.jpg) center no-repeat;
    background-size: cover;
    height: 100vh;
}

.form-container
{
    background-color: #F2F2F2;
    display: flex;
    justify-content: center;
}

.form-box
{
    display: flex;
    flex-direction: column;
    justify-content: center;
    min-height: 100vh;
}

.form-box h2
{
    font-weight: bold;
    color: #000;
    
}

.form-box .form-input
{
    position: relative;
    
}
.form-box .form-input input
{
    width: 100%;
    height: 40px;
    margin-bottom: 40px;
    border: none;
    border-radius: 5px;
    outline: none;
/*    background: white;*/
    padding-left: 45px;
    
}

.form-box .form-input span
{
   position: absolute;
   top: 8px;
   padding-left: 20px;
   color: #777;
    
}
.form-box .form-input input::placeholder
{
    text-align: right;
    padding-left: 0px;
}

.form-box input[type="checkbox"]:not(:checked) + label:before
{
    background: transparent;
    border: 2px solid darkgrey;
    width: 15px;
    height: 15px;
}

.btn
{
    border: none;
    cursor: pointer;
    width: 375px;
    height: 40px;
    border-right: 5px;
    background-color:  #959D98;
    color:  #fff;
    transition: 0.5s;
    font-weight: bold;
}

.btn:hover
{
    box-shadow: 0px 9px 10px -2px rgba(0,0,0,0.55);
}

.custom-control-input
{
    
}
        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-none d-md-block image-container"></div>
                <div class="col-lg-6 col-md-6 form-container">
                    <div class="col-lg-8 col-md-12 col-sm-9 col-xs-12 form-box text-center">
                        <div class="heading mb-4">
                            <h2>إضافة جهة مستفيدة</h2>
                        </div>

                        <div class="form-input needs-validation" novalidate>


                            <input type="textfield" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="الرجاء إضافة أسم التصنيف " required>

                           
                            
                        </div>
                        <div class="text-right mb-3">
                            <input type="submit" value="إضافة" class="btn" onclick="validate();">
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
                                    var select = document.getElementById("inlineFormCustomSelect");


                                    if (txt.value === "")
                                    {
                                        txt.style.backgroundColor = "lightblue";
                                        txt.placeholder = "الرجاء إدخال أسم الجهة المستفيدة";

                                    } else {
                                        txt.style.backgroundColor = "";
                                        

                                    }

                                    if (txt1.value === "")
                                    {
                                        txt1.style.backgroundColor = "lightblue";
                                        txt1.placeholder = "الرجاء إدخال رمز الجهة المستفيدة";
                                    } else {
                                        txt1.style.backgroundColor = "";
                                        

                                    }
                                    if (select.selectedIndex == 0)
                                    {
                                        select.style.backgroundColor = "lightblue";

                                    } else {
                                        select.style.backgroundColor = "";
                                    }




                                }
    </script>
</html>


<?php
include 'Footer100.php';
?>