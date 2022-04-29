<?php
include 'AdminHeader.php';
?>

<html>
    <head dir="rtl" lang="ar">
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        
        
        <style>
            
            
           body
            {
                background-color: #F1F1F1;
                font-family: Droid Arabic Kufi;
            }
            
            #header
            {
                direction: rtl;
            }
            
           .card
            {
          margin-top: 30px;
          width: -2000px;
          text-align: right;
          
          
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
              
              
              
              <div class="card-header"><strong>الفئه الفرعيه</strong></div>
        
        <div class="card-body">
        
            <table class="table">
                <thead>
                    <tr>
                        <th>: اختيار</th>
                        <th>:الجهه المختصه </th>
                        <th>: الموظف المختص</th>
                        <th>: الاداره المختصه</th>
                        <th>:الهدف من الخدمه </th>
                        <th>:شرح تفاصيل الخدمه </th>
                        <th>:عنوان الخدمه </th>
<!--                        <th>:شرح تفاصيل الخدمه </th>
                        <th>:الهدف من الخدمه </th>
                        <th>: الاداره المختصه</th>
                        <th>: الموظف المختص</th>
                        <th>:الجهه المختصه </th>
                        <th>: اختيار</th>-->
                        
                        
                        
                        
                    </tr>
                </thead>
                
                <tbody>
                    <tr>
                        <td><a href="EditService3.php">تعديل</a></td>
                        <td>الخ</td>
                        <td>الح</td>
                        <td>الخ</td>
                        <td>الخ</td>
                        <td>الخ</td>
                        <td>الخ</td>
                        
                        
                    </tr>
                </tbody>
            </table>
        </div>
    
                </div>
            </div>
                          </div>
    </body>
</html>
