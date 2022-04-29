<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>رأس صفحة المشرف</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script src="js/bootstrap-dropdown.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
              integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
              integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <style>
            @import url('css/bootstrap.min.css');
            body{
                background-color: #F1F1F1;
                font-family: Droid Arabic Kufi;
            }
            
            #header{
                direction: rtl;
            }
            </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm  navbar-light" id="header" style="background: #EAE0CE">
            <a class="navbar-brand mb-4 " href="Welcoming.php">
          <img src="WSLogo.png" alt="logo" style="width:220px;">
        </a> 
        <ul class="navbar-nav mt-5">

            
             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="benSite" style="border: none;" data-toggle="dropdown">
                  الجهات المستفيدة
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="AddBeneficiary.php">اضافة جهة مستفيدة</a>
                    <a class="dropdown-item" href="ViewParties.php">عرض الجهات المستفيدة</a>
                  
                </div>
              </li>
              
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="SubbenSite" style="border: none;" data-toggle="dropdown">
                  التصنيف الفرعي للجهات 
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="Add.php">اضافة تصنيف</a>
                    <a class="dropdown-item" href="Individual_Services.php">عرض/حذف تصنيف</a>
                  <a class="dropdown-item" href="#">تعديل تصنيف</a>
                </div>
              </li>
              
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbardrop" style="border: none;" data-toggle="dropdown">
                  الخدمات
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="AddSer.php">اضافة خدمة</a>
                    <a class="dropdown-item" href="ServiceView.php">عرض/ حذف خدمة</a>
                    <a class="dropdown-item" href="EditService1.php">تعديل خدمة</a>
                </div>
              </li>
              
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbardrop" style="border: none;" data-toggle="dropdown">
                  الادارات المسؤولة
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="AddDep.php">اضافة ادارة</a>
                    <a class="dropdown-item" href="Admins2.php">عرض الادارات</a>
                  
                </div>
              </li>
              
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbardrop" style="border: none;" data-toggle="dropdown">
                  الموظفين
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="AddEmployee.php">اضافة موظف مسؤول</a>
                    <a class="dropdown-item" href="ViewEmployees.php">عرض/ حذف موظف مسؤول</a>
                  
                </div>
              </li>
              
              <li class="nav-item">
                  <a class="nav-link" href="Queries.php">الاستفسارات</a>
            </li>
 
        </ul>   
        
        <div class="mr-auto">
            <ul class="navbar-nav">
                <li class="nav-item login mt-5" >
              <a class="nav-link " href="#"> <span class="fas fa-user"></span>تسجيل الخروج  </a>
            </li>
                </ul>
        </div>
      </nav>
    </body>
</html>
