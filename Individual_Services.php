<html dir="rtl" lang="ar">
    <head>


        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
        <style>



            body{             background-color: #F1F1F1;
                              font-family: Droid Arabic Kufi;
            }
            login  {

                direction: ltr;
            }

            img{
                display: block;
            }

            #rows{

                margin-top: 40px;
                margin-left: 40px;



            }
            .container{
                margin-top: 20px;
            }

            hr {
                margin-top: 1rem;
                margin-bottom: 1rem;
                border: 0;
                border-top: 1px solid rgba(0, 0, 0, 0.3);
            }

            .card-columns{
                padding-top: 30px;
            }
            #car{
                background-color: #959D98 ;               
                box-shadow: 0 12px 25px 0 rgba(0,0,0,0.2);


            }

            .titles1{
                margin-left: 170px;
                font-family: Droid Arabic Kufi;
            }
            .titles2{
                margin-left: 100px;
                font-family: Droid Arabic Kufi;
            }
            .stretched-link{
                color: white;
                font-family: Droid Arabic Kufi;
                font-size: 16px;
            }

            .stretched-link:hover{
                color: white;
                font-size: 20px;
            }
            .stretched-link:active {
                color: black;

            }
            .card-body{
                margin-top: 50px;

            }

            .stretched-link::after {
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 1;
                pointer-events: auto;
                content: "";




            }

            #car:hover {

                background-color: #CE9643;
                border-radius: 18px;

                box-shadow: 0 12px 25px 0 rgba(0,0,0,0.5);

                opacity: 0.7;
            }
            
            #group{
                width: 250px;
                margin-right: 600px;
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

        <div class="container-fluid">
            <div id="rows">
                <div class="row">

                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-sm-12">
                                <h2 class=" titles1 " >خدمات الأفراد</h2>
                            </div>
                        </div>
                        <div class="row bottom-right">
                            <div class="col-sm-12">
                                <h5 class="titles2 ">خدمات المواطنين و المقيمين  </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8" id="cols">

                        <div class="input-group" id="group">
                            <div class="input-group-append">
                                <button class="btn" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                            <input type="text" class="form-control" placeholder="بحث" id="search">

                        </div>

                    </div>  
                </div>

            </div>
            <hr>

        </div>
        <div class="container">
            <div class="card-columns " style="width:900px ; margin:auto ;margin-left: 130px;"  >

                <div class="card " style="width: 15rem; height: 11rem" id="car">


                    <div class="card-body text-center">
                        <a href="ServiceView.php"class="stretched-link "  style="text-decoration: none;">خدمات التخطيط</a>

                    </div>
                </div>


                <div class="card " id="car" style="width: 15rem; height: 11rem">

                    <div class="card-body text-center">
                        <a href="ServiceView.php" class="stretched-link " style="text-decoration: none;">خدمات مهنية</a>
                    </div>
                </div>
                <div class="card" id="car" style="width: 15rem; height: 11rem">

                    <div class="card-body text-center">
                        <a href="ServiceView.php" class="stretched-link " style="text-decoration: none;"> خدمات التسجيل</a>
                    </div>
                </div>
                <div class="card" id="car" style="width: 15rem; height: 11rem">

                    <div class="card-body text-center">
                        <a href="ServiceView.php" class="stretched-link " style="text-decoration: none;" >خدمات الأراضي والملح </a>
                    </div>
                </div>
                <div class="card " id="car" style="width: 15rem; height: 11rem">

                    <div class="card-body text-center">
                        <a href="ServiceView.php" class="stretched-link" style="text-decoration: none;">خدمات الأستعلام </a>
                    </div>
                </div>
                <div class="card " id="car" style="width: 15rem; height: 11rem">

                    <div class="card-body text-center">
                        <a href="ServiceView.php" class="stretched-link " style="text-decoration: none;">خدمات الصحة العامة </a>
                    </div>
                </div>
            </div></div>



    </body>
<?php include 'Footer100.php';?>
</html>
