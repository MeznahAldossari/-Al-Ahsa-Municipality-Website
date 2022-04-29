<?php
include 'AdminHeader.php';
?>

<html lang="ar" dir="rtl">
    <head>
        <title>TODO supply a title</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
  <style>
      body
{
 
    background-color: #F1F1F1;
    
    
    
}

               body{
                background-color: #F1F1F1;
                font-family: Droid Arabic Kufi;
            }
            
            #header{
                direction: rtl;
            }

*
{
    font-family: Droid Arabic Kufi;
}

      .card
      {
          
          margin-top: 30px;
          width: -2000px;
          
          
      }
      .card-header
      {
          text-align: right;
          
      }
      
      .table
      {
          
          margin-top: 10px;
          text-align: right;
      }
  </style>
    </head>
    <body>
        
<!--        
        
         
        
        <nav class="navbar navbar-expand-sm  navbar-light sticky-top" id="header" style="background: #EAE0CE">
        <a class="navbar-brand mb-4 " href="#">
          <img src="WSLogo.png" alt="logo" style="width:220px;">
        </a> 
        <ul class="navbar-nav mt-5">

            
             <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="benSite" style="border: none;" data-toggle="dropdown">
                  الجهات المستفيدة
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">اضافة جهة مستفيدة</a>
                  <a class="dropdown-item" href="#">عرض/حذف جهة مستفيدة</a>
                  <a class="dropdown-item" href="#">تعديل جهة مستفيدة</a>
                </div>
              </li>
              
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="SubbenSite" style="border: none;" data-toggle="dropdown">
                  التصنيف الفرعي للجهات 
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">اضافة تصنيف</a>
                  <a class="dropdown-item" href="#">عرض/حذف تصنيف</a>
                  <a class="dropdown-item" href="#">تعديل تصنيف</a>
                </div>
              </li>
              
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbardrop" style="border: none;" data-toggle="dropdown">
                  الخدمات
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">اضافة خدمة</a>
                  <a class="dropdown-item" href="#">عرض/ حذف خدمة</a>
                  <a class="dropdown-item" href="#">تعديل خدمة</a>
                </div>
              </li>
              
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbardrop" style="border: none;" data-toggle="dropdown">
                  الادارات المسؤولة
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">اضافة ادارة</a>
                  <a class="dropdown-item" href="#">عرض/ حذف ادارة</a>
                  <a class="dropdown-item" href="#">تعديل ادارة</a>
                </div>
              </li>
              
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbardrop" style="border: none;" data-toggle="dropdown">
                  الموظفين
                </a>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">اضافة موظف مسؤول</a>
                  <a class="dropdown-item" href="#">عرض/ حذف موظف مسؤول</a>
                  <a class="dropdown-item" href="#">تعديل موظف مسؤول </a>
                </div>
              </li>
              
              <li class="nav-item">
              <a class="nav-link" href="#">الاستفسارات</a>
            </li>
 
        </ul>   
        
        <div class="mr-auto">
            <ul class="navbar-nav">
                <li class="nav-item login mt-5" >
              <a class="nav-link " href="#"> <span class="fas fa-user"></span>تسجيل الخروج  </a>
            </li>
                </ul>
        </div>
      </nav>-->
        
        
        

        

            <div class="container">
                <div class="col-lg-12 col-md-8 col-sm-8 col-xs-8">  
          <div class="card">
              
              
              
              <div class="card-header"><strong>الجهات المستفيده</strong></div>
        
        <div class="card-body">
        
            <table class="table">
                <thead>
                    <tr>
                        <th>رقم الجهة:</th>
                        <th>اسم الجهة:</th>
                        
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td>1001</td>
                        <td>الشركه السعوديه للكهرباء</td>
                        <td><button type="button" class="btn btn-success" onclick="window.location='company.php'">تعديل</button></td>
                  <td><button type="button" class="btn btn-danger">حذف</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    
                </div>
            </div>
                          </div>
        

        
            
      
        
        <br>
        <br>
        
  
    </body>
</html>

