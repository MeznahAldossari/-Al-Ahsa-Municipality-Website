<?php
require 'navbar.php';
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html dir="rtl" lang="ar">
    <head>
        <title>عرض الجهات المستفيدة- خدماتي</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "stylesheet" type = "text/css" href = "Home-style.css" />
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
        <style>
            body{
                background-color: #F1F1F1;
                font-family: Droid Arabic Kufi;
            }
            
            #header{
                direction: rtl;
            }
            
            .text h2{
                text-align: right;
                color: #959D98;
            }
            
            .color-overlay {
            
            background: /* transparent blue overlay */
            linear-gradient( rgba(235, 135, 101, 0.70), 
            rgba(254, 199, 108, 0.50)), 
            /* inset your image below */
            url(cardBG.jpg);
            background-size: cover;
        }

        h1{
                
                color: #555;
                font-weight: bold;
            }
            
            p{
                
                color: #555;
                font-weight: bold;
            }
            
            .card{
                border-radius: 0;
                box-shadow: 5px 5px 15px #CE9643;
                transition: all .3s ease-in;
                -webkit-transition: all .3s ease-in;
                -moz-transition: all .3s ease-in;
                width: 350px;
                height: 300px;
                text-align: center;
                margin: 20px;
            }
            
            .card:hover{ 
                border-radius: 5px;
                border: none;
                box-shadow: 5px 5px 10px #959D70;
            }
            
            .card:hover h1, .card:hover p{
                color: #fff;
            }
        </style>    
    </head>
    <body>
        
        
        
        <div class="text">
            <h2 class="my-5 px-5">الجهات المستفيدة  </h2><hr>
        </div>
        
        <div class="container">
            <div class="card-columns " style="width:900px ; margin:auto ;margin-left: 130px;">
                
            <div class="card img-fluid color-overlay "  >
                <div class="card-img-overlay">
                    <div class="align">
                        <h1 class="card-title text mt-5">مثال</h1>
                        <p class="card-text text mt-5">مثال لعرض الجهات المستفيده</p>
                        <a href="#" ></a></div>
                </div>
              </div>
                
                <div class="card img-fluid color-overlay" >
                <div class="card-img-overlay">
                    <div class="align">
                        <h1 class="card-title text mt-5">مثال</h1>
                        <p class="card-text text mt-5">مثال لعرض الجهات المستفيده</p>
                        <a href="#" ></a></div>
                </div>
              </div>
                
                
                <div class="card img-fluid color-overlay" >
                <div class="card-img-overlay">
                    <div class="align">
                        <h1 class="card-title text mt-5">مثال</h1>
                        <p class="card-text text mt-5">مثال لعرض الجهات المستفيده</p>
                        <a href="#" ></a></div>
                </div>
              </div>
                
                
                <div class="card img-fluid color-overlay" >
                <div class="card-img-overlay">
                    <div class="align">
                        <h1 class="card-title text mt-5">مثال</h1>
                        <p class="card-text text mt-5">مثال لعرض الجهات المستفيده</p>
                        <a href="#" ></a></div>
                </div>
              </div>
                
                
                <div class="card img-fluid color-overlay" >
                <div class="card-img-overlay">
                    <div class="align">
                        <h1 class="card-title text mt-5">مثال</h1>
                        <p class="card-text text mt-5">مثال لعرض الجهات المستفيده</p>
                        <a href="#" ></a></div>
                </div>
              </div>
                
                
                <div class="card img-fluid color-overlay" >
                <div class="card-img-overlay">
                    <div class="align">
                        <h1 class="card-title text mt-5">مثال</h1>
                        <p class="card-text text mt-5">مثال لعرض الجهات المستفيده</p>
                        <a href="#" ></a></div>
                </div>
              </div>
                
            </div>
              
            </div>
          
       
    </body>
</html>
