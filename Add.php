<html dir="rtl" lang="ar">


    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">


        <style>

            .border{
                background-color: #F5F5DC;
                box-shadow: 0 12px 25px 0 rgba(0,0,0,0.9);
                height: 380px;
                width: 500px;
                margin: 0 auto;
                margin-top: 80px;
            }
            #label1{
                margin-left: 373px;
                margin-top: 20px;

            }

            #list{
                width: 200px;
                margin-right: 38px;
                text-align: center;
                text-align-last: center;
                -moz-text-align-last: center;
            }
            .name{
                width: 200px;
                margin-left: 260px ;
                margin-top: -0vh;

            }
            #label2{
                margin-left: 380px;
                margin-top: 40px;

            }
            #title{
                margin-left: 130px;
                margin-top: 40px;
            }
            #add{
                width: 100px;
                height: 40px;
                margin-top: 30px;
                margin-left: 360px;

            }
            #add:hover{
                background-color: gray;

            }
            #add:active{
                box-shadow: 0 12px 25px 0 rgba(0,0,0,0.4);
            }
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

        <?php include 'AdminHeader.php'; ?>

        <div class="row no-gutters" >

            <div class="col no-gutters" style="   background-color: #F5F5DC;" >

                <div class="border">

                    <form>


                        <div class="form-group ">

                            <h4 id="title">-- اضافة جهة مستفيدة --</h4>
                            <label for="ServiceName" id="label2">أسم الخدمة :</label>

                            <input type="text" placeholder="أدخل الأسم" class="name">

                            <label for="MainCategory" id="label1">الفئة الرئيسية: </label>
                            <select class="form-control" id="list">
                                <option> اختار </option>
                                <option> الافراد </option> 
                                <option> جهة حكومية </option>
                                <option> الاعمال </option>
                            </select>

                            <button type="button" class="btn btn-secondary" id="add">أضافة</button>






                        </div>
                    </form>


                </div>
            </div>
            <div class="col no-gutters">

                <img src="ii.jpg" style="width: 100%; height: 100%">



            </div>





        </div>
       
    </body>   


<?php include 'Footer100.php';?>

</html>

