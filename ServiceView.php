<?php
require 'AdminHeader.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="Ar" dir="rtl">
    <head>
        <!-- requirement meta tags -->
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- bootstrap CSS -->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="CSS/style.css">
    </head>

    <body class="serviceView">

      
      
       <div class="container-fluid"> 
           <div class="raw raw-1">
                <div class="col ">
                    <h1 class="serviceView-nav ">خدمات الأفراد</h1>
                    <h1 class="serviceView-nav"> | </h1>
                    <h1 class="serviceView-nav"> خدمات الإستعلام </h1>
                </div>
           </div> 
           <!-- Row for first line of services -->
           <div class="row row-2">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">نوع الخدمة </h3>
                  <p class="card-text">تتيح هذه الخدمة مكانية الإستعلا عن الوفيات بالامانة </p>
                  <a href="ServiceInformation.php" class="btn btn-lg">دليل إجراء الخدمة</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">نوع الخدمة</h3>
                  <p class="card-text">تمكن هذه الخدمة الإستعلام عن الاحالات بالامانة</p>
                  <a href="ServiceInformation.php" class="btn btn-lg">دليل إجراء الخدمة</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Row for second line of services -->
          <div class="row row-2">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">نوع الخدمة  </h3>
                  <p class="card-text">تتيح هذه الخدمة مكانية الإستعلا عن مخالفة بالامانة </p>
                  <a href="ServiceInformation.php" class="btn btn-lg">دليل إجراء الخدمة</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title">نوع الخدمة  </h3>
                  <p class="card-text">تمكن هذه الخدمة الإستعلام عن المعاملات بالامانة برقم المعاملة وتاريخها  </p>
                  <a href="ServiceInformation.php" class="btn btn-lg">دليل إجراء الخدمة</a>
                </div>
              </div>
            </div>
          </div>
       </div>
       


        <!-- jQuery first, then Tether, then Bootstrap js -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
        crossorigin="anonymous"></script>
        <script src="bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>\
    </body>
</html>
