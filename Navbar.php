<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html  >
    <head>
        <title>the header</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
              integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
        <style>
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
       
        <nav class="navbar navbar-expand-sm  navbar-light " id="header" style="background: #EAE0CE">
            <a class="navbar-brand mb-4 " href="index.php">
          <img src="WSLogo.png" alt="logo" style="width:220px;">
        </a> 
        <ul class="navbar-nav mt-5">
            
            <li class="nav-item">
                <a class="nav-link" href="View_Services.php">خدماتنا</a>
              </li>
              
               <li class="nav-item">
                   <a class="nav-link" href="Beneficiaries.php">جهاتنا المستفيدة</a>
              </li>

            <li class="nav-item">
                <a class="nav-link" href="index.php#footer"> تواصل معنا</a>
            </li>
          
            <li class="nav-item">
                <a class="nav-link" href="index.php#about">عنا</a>
            </li>
        </ul>
        
        <div class="mr-auto">
            <ul class="navbar-nav">
                <li class="nav-item login mt-5" >
                    <a class="nav-link " href="LoginPage.php"> <span class="fas fa-user"></span>تسجيل الدخول  </a>
            </li>
                </ul>
        </div>
      </nav>
    </body>
</html>
