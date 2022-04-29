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

                           
                           
                            <div class="text-right mb-3">
                            <input type="submit" value="إضافة" class="btn" onclick="validate();">
                        </div>
                        
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
                                    


                                    if (txt.value === "")
                                    {
                                        txt.style.backgroundColor = "lightblue";
                                        txt.placeholder = "الرجاء إدخال أسم الجهة المستفيدة";

                                    } else {
                                        txt.style.backgroundColor = "";
                                        

                                    }





                                }
    </script>
</html>
<?php
include 'Footer100.php';
?>


