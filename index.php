<?php 
    require 'Navbar.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html dir="rtl" lang="ar">
    <head>
        <title>خدماتي - الصفحة الرئيسية </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
       
        <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        
        <style>
            
            login  {
                
                direction: ltr;
            }
            
            body{
                background-color: #F1F1F1;
                font-family: Droid Arabic Kufi;
                left: 0;
                
            }
  
            .carousel-inner img {
               width: 100%;
               height: 80vh;
            }

            .carousel-item:before {
              -webkit-box-shadow: inset 0 0 20rem rgba(0, 0, 0, 1);
              box-shadow: inset 0 0 20rem rgba(0, 0, 0, 1);
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              content: "";
          }

            

            .carousel-caption{
                position: absolute;
                width: 50%;
                bottom: 2%;
                right: 5%;
                text-align: right;

            }

            .carousel-caption h3{
                font-size: 4em;
                text-shadow: 2px 2px 4px #000000;

            }

            .carousel-caption p{

                text-shadow: 2px 2px 4px #000000;
                color: #fff;

            }
            
              .container{
                margin-top: 12%;
            }
            
            
           .color-overlay {           
            background: 
            linear-gradient( rgba(235, 135, 101, 0.70), 
            rgba(254, 199, 108, 0.50)), 
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
            
            .CardBody{
                border-radius: 0;
                box-shadow: 5px 5px 15px #CE9643;
                transition: all .3s ease-in;
                -webkit-transition: all .3s ease-in;
                -moz-transition: all .3s ease-in;
                width: 400px;
                height: 300px;
                text-align: center;
                margin: 20px;
            }
            
            .CardBody:hover{ 
                border-radius: 5px;
                border: none;
                box-shadow: 5px 5px 10px #959D70;
            }
            
            .CardBody:hover h1, .CardBody:hover p{
                color: #fff;
            }
            
            
            .title h2{
                color: #959D98 !important;
            }
            
            .title h2 , .title p{
                 color: #CE9643;
                 text-align: center;
                 
            }
            
            .container-fluid{
                background-color: #E4E4E4;
                text-align: right;
                
            }
            
            .container-fluid p{
                color: #CE9643;
            }
            
            .container-fluid h1 {
                color: #959D98;
            }
            
            #services h6, a, a:hover{
                color: #CE9643;
                text-decoration: none;
 
            }
            
            /* footer*/
            
            .sec-footer{
            background: #fff;
            direction: rtl;
            text-align: right;
            color: #9A4B3F;
            padding-top: 2.5rem;
            padding-bottom: 2rem;
        }
        .sec-footer .desc-box{
            background: transparent;
            border: 0;
        }
        .sec-footer .desc-box .card-title::after{
            content: ' ';
            background: #9A4B3F;
            display: block;
            width: 95%;
            height: 0.2rem;
            margin-top:0.3rem;
        }
        .sec-footer .desc-box .card-text{

            text-align: justify;
        }
        .sec-sub-footer{
            background: #EAE0CE;
            direction: rtl;
            text-align: right;
            color: #000;
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
            font-size:0.8rem;
        }
        .sec-sub-footer a{
            font-size:0.8rem;
        }



        /*------------------*/
        .snip1472 {
            position: relative;
            font-size: 20px;
            color:  #9A4B3F;
            width: 45px;
            margin: 4px;
            height: 45px;
            line-height: 45px;
            display: inline-block;
            text-align: center;
            -webkit-perspective: 50em;
            text-decoration: none;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        .snip1472:after {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            border: 2px solid #e6e6e6;
            content: '';
            z-index: -1;
            border-radius: 50%;
        }
        .snip1472:before {
            color: #9A4B3F;
        }
        .snip1472:before,
        .snip1472:after {
            -webkit-transition: all 0.45s ease-in-out;
            transition: all 0.45s ease-in-out;
        }
        .snip1472:hover,
        .snip1472:active,
        .snip1472.hover {
            color: #c0392b;
        }
        .snip1472:hover:after,
        .snip1472:active:after,
        .snip1472.hover:after {
            border-color: #c0392b transparent #c0392b transparent;
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg);
        }
  
  
  </style>
    </head>
    <body>
        
            
        
        
        <div id="slider" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators" style="">
              <li data-target="#slider" data-slide-to="0" class="active"></li>
              <li data-target="#slider" data-slide-to="1"></li>
              <li data-target="#slider" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="Slide1.jpg" alt="منتزة الملك عبدالله" width="1100" height="500">
                <div id="back" style=" background-color: #EAE0CE " >
                    <div class="carousel-caption d-none d-md-block " >
                    <h3>منتزة الملك عبدالله</h3>
                    <p class="carouselText">نزهة لا مثيل لها</p>
                    </div>
                </div>
                
              </div>
              <div class="carousel-item">
                <img src="Slide3.jpg" alt="منتزة جواثا السياحي " width="1100" height="500">
                <div class="carousel-caption">
                    <h3>منتزة جواثا السياحي</h3>
                    <p class="carouselText">لفعاليات ممتعة </p>
                  </div>
              </div>
              <div class="carousel-item">
                <img src="Slide4.jpg" alt="جبل القاره " width="1100" height="500">
                <div class="carousel-caption">
                    <h3> جبل القارة </h3>
                    <p class="carouselText">تعرف على تاريخ الأحساء</p>
                  </div>
              </div>
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#slider" data-slide="prev" style="height:75vh">
              <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#slider" data-slide="next" style="height:75vh">
              <span class="carousel-control-next-icon"></span>
            </a>
            
            <section id="services">
                
                <div class="title my-5">
                    
                    <h2>تعرف على خدماتنا</h2>
                    <p> يتم عرض الخدمات حسب الجهات المستفيدة</p>
                </div>
                
                
                <div class="container my-5">
            <div class="row">
                <div class="col-md-4 col-sm-6 ">
                        <div class="card img-fluid color-overlay CardBody" >
                        <div class="card-img-overlay">
                            <div class="align">
                                <h1 class="card-title text mt-5">الافراد</h1>
                                <p class="card-text text mt-5">الخدمات المقدمة للأفراد</p>
                                <a href="individual_Services.php"  class="stretched-link"></a></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="card img-fluid color-overlay CardBody" >
                        <div class="card-img-overlay">
                            <div class="align">
                                <h1 class="card-title text mt-5">حكومي</h1>
                                <p class="card-text text mt-5">الخدمات المقدمة للجهات الحكومية</p>
                                <a href="#" class="stretched-link"></a></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 col-sm-6">
                    <div class="card img-fluid color-overlay CardBody" >
                        <div class="card-img-overlay">
                            <div class="align">
                                <h1 class="card-title text mt-5">خدمات الاعمال</h1>
                                <p class="card-text text mt-5">الخدمات المقدمة للشركات والمنشئات الخاصة</p>
                                <a href="#" class="stretched-link"></a></div>
                        </div>
                    </div>
            </div>
        </div>
                <h6 class="pl-5 pb-5" style="text-align: left;"><a href="Beneficiaries.html">عرض المزيد...  </a></h6> 
            </section>
            
            <section class="about">
                
                <div class="container-fluid py-5">
                    
                    <div class="row">
                        
                        <div class="col-sm-8 px-5 py-5" id="about">
                        <h1 class="py-5">عن دليل الاجراءات الحكومية</h1>
                    <p>موقع دليل الاجرءات الحكومية هو موقع يوفر دليل للمستخدم فيما يخص الخدمات الإلكترونية المقدمة من قبل أمانة الأحساء. فيتيح الفرصة للعديد من المستخدمين كالأفراد، موظفي الشركات بالقطاع الخاص، وموظفي القطاع الحكومي الاطلاع على جميع الخدمات المتاحة ومعرفة المعلومات والتفاصيل المتعلقة بالخدمة
                        المختارة من قبله</p>
                        </div>
                        <div class="col-sm-4 py-5">
                            <img src="WSLogo.png" alt="Logo" class="px-5 pt-5" style="width: 100%"/>
                        </div>
                      </div>
                    
                               
                  </div>
                
            </section>
            
            <footer>
                
                <section class="container-fluid sec-footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card desc-box">
                    <div class="card-body">
                        <div class="card-title">مشغل بواسطة</div>
                        <div class="card-text">
                            <img src="aa.png" alt="Logo" class="img-fluid mt-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card desc-box">
                    <div class="card-body">
                        <div class="card-title">ــ للتواصل و الإستفسار ــ</div>
                        <div class="card-text">
                            <div class="row">
                                <div class="col">
                                    <i class="fas fa-phone ml-3"></i>
                                    <span> الهاتف : 0135825000</span>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class="fas fa-map-marker ml-3"></i>
                                    <span>المملكة العربية السعودية,الأحساء</span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <i class="fas fa-envelope-open ml-3"></i>
                                    البريد الإلكتروني : <a href="mailto:info@alhasa.gov.sa" id="t">info@alhasa.gov.sa</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col text-center">
                <input type="textfield" class="form-control text-right col-md-12 mb-3" id="name" aria-describedby="emailHelp" placeholder="الإسم" required>
                <input type="email" class="form-control text-right col-md-12 mb-3" id="email" aria-describedby="emailHelp" placeholder="البريد الإلكتروني" required>
                <input type="textfield" class="form-control text-right col-md-12 mb-3" id="title" aria-describedby="emailHelp" placeholder="الموضوع" required>
                <textarea class="form-control text-right col-md-12 mb-3" id="exampleFormControlTextarea1" rows="3" required placeholder="الرسالة"></textarea>
                <button type="submit" class="btn btn-primary col-md-12 mb-3">إرسال</button>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid sec-sub-footer footer100">
    <div class="container">
        <div class="row">
            <div class="col">
                <span>تواصل معنا على مواقع الشبكات الإجتماعية</span>
            </div><!--.col-->
            <div class="col text-left">
                <a class="fb-ic">
                    <i class="fab fa-facebook-f white-text mr-4"> </i>
                </a>

                <a class="tw-ic">
                    <i class="fab fa-twitter white-text mr-4"> </i>
                </a>

                <a class="gplus-ic">
                    <i class="fab fa-google-plus-g white-text mr-4"> </i>
                </a>

                <a class="li-ic">
                    <i class="fab fa-linkedin-in white-text mr-4"> </i>
                </a>

                <a class="ins-ic">
                    <i class="fab fa-instagram white-text mr-4"> </i>
                </a>
            </div>
        </div>
    </div>
</section>	
            </footer>
          
    </body>
</html>
