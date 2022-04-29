<?php
require 'AdminHeader.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html >
    <head>
        <title>خدماتي- الاستفسارات</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
              integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
        <style>
            @import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


            body{
                background-color: #F1F1F1;
                font-family: Droid Arabic Kufi;
            }
            #header{
                direction: rtl;
            }


            .table{
                text-align: right; 
                direction: rtl;

            }

            .queriesC h2{
                text-align: right;
                color: #959D98;

            }

            .table thead{
                color: #CE9643;
            }

            .table tbody{
                color: #959D98;
            }
            
            


        </style>
    </head>
    <body>





        <div class=" content my-5">
            <div class="container queriesC ">
                <h2 class="my-5">استفسارات الزوار<hr></h2>



                <table class="table table-hover  my-5">
                    <thead>
                        <tr>
                            <th>الاسم</th>
                            <th>البريد الالكتروني</th>
                            <th>عنوان الرساله </th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>فاطمه الملحم</td>
                            <td>fa@example.com</td>
                            <td>استفسار بخصوص خدمة تقديم معاملة </td>
                            <td><button type="button" class="btn btn-success"  onclick="window.location = 'Query.php'">المزيد</button></td>
                            <td><button type="button" class="btn btn-danger">حذف</button></td>
                        </tr>
                        <tr>
                            <td>شروق الزهراني</td>
                            <td>shz@example.com</td>
                            <td>عن خدمة الاعتراض على مخالفة</td>
                            <td><button type="button" class="btn btn-success" onclick="window.location = 'Query.php'">المزيد</button></td>
                            <td><button type="button" class="btn btn-danger">حذف</button></td>
                        </tr>
                        <tr>
                            <td>فاطمه السلمان </td>
                            <td>fs@example.com</td>
                            <td>استفسار بخصوص خدمات الاعمال</td>
                            <td><button type="button" class="btn btn-success" onclick="window.location = 'Query.php'">المزيد</button></td>
                            <td><button type="button" class="btn btn-danger">حذف</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>




    </body>
</html>
<?php
include 'Footer100.php';
?>