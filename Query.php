<?php
        require 'AdminHeader.php';
        ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html dir="rtl" lang="ar">
    <head>
        <title>تفاصيل الاستفسار- خدماتي</title>
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


.menu{
        
       text-align: right;
    }
    
.queriesC h2{
    text-align: right;
    color: #959D98;
    
}

.details{
    text-align: right;
    
}

.details h4{
    padding-bottom: 20px;
    color: #CE9643;
}

.details .buttons{
    margin: 20px;
    
    float: left;
}
.details button{
    margin-right: 20px;
}

.table thead{
    color: #CE9643;
}

.table{
    text-align: right; 
    direction: rtl;
    
}
        </style>
    </head>
    <body>
    
                <div class="container queriesC ">
                    <h2 class="my-5">تفاصيل الاستفسار</h2><hr>
                
                    <div class="container border">
                        <div class=" content">
                <div class="container queriesC ">
                      
                     
            <table class="table table-hover ">
              <thead>
                <tr>
                  <th>الاسم</th>
                  <th>البريد الالكتروني</th>
                  <th>عنوان الرساله </th>
                  <th>المحتوى</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>فاطمه الملحم</td>
                  <td>fa@example.com</td>
                  <td>استفسار بخصوص خدمة تقديم معاملة </td>
                  <td>استفسار بخصوص خدمة تقديم معاملة استعلام عن المخالفات</td>
                </tr>
               
              </tbody>
            </table>
          </div>
            </div>
                        
                         <div class="buttons my-5">
                              <button type="button" class="btn btn-success">فتح البريد الالكتروني</button>
                              <button type="button" class="btn btn-danger">حذف</button>
                                </div>
                        
                    </div>

            </div>
        
    </body>
</html>
<?php
include 'Footer100.php';
?>