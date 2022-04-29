<?php

include 'AdminHeader.php';

?>


<html>
    <head  dir="rtl" lang="ar">
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        
        
        <style>
            
            
               body{
                background-color: #F1F1F1;
                font-family: Droid Arabic Kufi;
            }
            
            #header{
                direction: rtl;
            }
            
            body
{
   
    background-color: #F1F1F1;
    
}

*
{
    font-family: Droid Arabic Kufi;
}

            
            
 .dropdown2
{
          margin-bottom: 30px;
          margin-top: 50px;
          text-align: left;
          
          position: absolute;
          top: 70px;
          right: 150px;
}
    
    .dropdown1
{
          margin-top: 30px;
          text-align: left;
          
          position: absolute;
          top: 150px;
          right: 150px;
}

.dropdown1 .dropdown2
{
    border: 1px #222222;
}



.button
{
          margin-bottom: 30px;
          text-align: right;
         
  
          position: absolute;
          top: 230px;
          right:250px;
          width: 1px;
}

h5
{
    
    margin-top: 45px;
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
      </nav>
        -->
        
        
        
        
        
        
                   
         <div class="container">
                  
                    
                    <div class="row">
                        
                        
                        
                        
                        <div class="col-lg-12 col-md-8 col-sm-8 col-xs-8">
                            
                            
                            <h5>:تعديل خدمه</h5>
                            <hr>
                            
                                         <div class="dropdown2">
    <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">
      الفئات الرئيسيه
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">افراد</a>
      <a class="dropdown-item" href="#">اعمال</a>
      <a class="dropdown-item" href="#">حكومي</a>
    </div>
  </div>
                            

                            <div class="dropdown1">
    <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">
      الخدمات الفرعيه
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">خدمات التسجيل</a>
      <a class="dropdown-item" href="#">خدمات الاستعلام</a>
      <a class="dropdown-item" href="#">خدمات الصحه العامه</a>
      <a class="dropdown-item" href="#">خدمات التخطيط</a>
  </div>
                            
                            
                            
                        </div>
                            

                            
                            
                            
                        </div>
                        
                        
      <div class="col-lg-12 col-md-8 col-sm-8 col-xs-8">
     
          
      <div class="button">
          <button type="button" class="btn btn-outline-dark btn-lg" onclick="window.location='EditService2.php'">التالي</button>
      </div>
     
                     </div>
                    </div>
         </div>
        
        
        
    </body>
</html>
