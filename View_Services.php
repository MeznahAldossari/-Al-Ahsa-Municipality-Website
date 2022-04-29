
<html dir="rtl" lang="ar">
    <head>

        <meta charset="UTF-8">
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

            body{
                background-color: #fcfcf7;
            }
            #bar{
                height: 80px;
                margin-top: 60px;
                background-color: #fcfcf7;;
            }


            #group{
                width: 300px;
            } 

            .btn{
                background-color: #ffba3b;

            }
            .btn:hover{
                background-color: #ffac14;
            }
            .nav-item{
                font-family: Droid Arabic Kufi;
                margin-right: 20px;
            }
            .container{
                margin-top: -50px;

            }
            .card{
                margin-top: 50px;
                box-shadow: 0 12px 25px 0 rgba(0,0,0,0.1);
            }
            .btn-secondary{
                margin-top: 80px;
            }
            .card-body{
                height: 200px;
            }
            .card-title{
                margin-top: 40px;
            }
            .card-footer{
                height: 90px;
                background-color: #d0d0d0 ;
            }

            .stretched-link{
                color: #CE9643;
                font-family: Droid Arabic Kufi;
                margin-top: 10px;
            }


            .card:hover {


                border-radius: 10px;

                box-shadow: 0 12px 25px 0 rgba(0,0,0,0.8);

                opacity: 0.9;
            }

            a:active {
                color: black;

            }
            hr {
                margin-top: 1rem;
                margin-bottom: 1rem;
                border: 0;
                border-top: 1px solid rgba(0, 0, 0, 0.2);
            }
            #navs{
                background-color: #F1F1F1;
                font-family: Droid Arabic Kufi;
                height: 150px;
                margin-top: 0px;
                
            }
            login  {

                direction: ltr;
            }
            #search{
                width: 100px;
            }
        </style>

    </head>
    <body>

        
        
        <?php include 'Navbar.php';?>
        
             <div class="container-fluid">


            <nav class="navbar navbar-expand-sm " id="bar">


                <div class="navbar-nav ml-auto">

                    <h2 class="nav-item">عرض الخدمات</h2>
                </div>

                <div class="input-group" id="group">
                    <div class="input-group-append">
                        <button class="btn" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                    <input type="text" class="form-control" placeholder="بحث" id="search">

                </div>



            </nav>
            <hr>
            <br>
        </div>  
        


        <div class="container py-5">
            <div class="row">



                <div class="col-md-3 ">

                    <div class="card border-dark" style="height: 14rem" >


                        <div class="card-body text-center">
                            <h3 class="card-title">خدمة تصاريح التنقل</h3>



                        </div>
                        <div class="card-footer">

                            <a href="ServiceInformation.php" class="stretched-link " style="text-decoration: none; float: right; font-size: 13px;">عرض التفاصيل</a>
                        </div>

                    </div>

                </div>

                <div class="col-md-3 ">

                    <div class="card border-dark" style="height: 14rem" >


                        <div class="card-body text-center">
                            <h3 class="card-title">خدمة  الرخص المهنية</h3>



                        </div>
                        <div class="card-footer">

                            <a href="ServiceInformation.php" class="stretched-link " style="text-decoration: none; float: right; font-size: 13px;">عرض التفاصيل</a>
                        </div>

                    </div>

                </div>
                
                <div class="col-md-3 ">

                    <div class="card border-dark" style="height: 14rem" >


                        <div class="card-body text-center">
                            <h3 class="card-title">خدمات التأهيل</h3>



                        </div>
                        <div class="card-footer">

                            <a href="ServiceInformation.php" class="stretched-link " style="text-decoration: none; float: right; font-size: 13px;">عرض التفاصيل</a>
                        </div>

                    </div>

                </div>









            </div>
        </div>
        
    </body>
</html>

