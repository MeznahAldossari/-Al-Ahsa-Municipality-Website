<?php
include 'AdminHeader.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html dir="rtl" lang="ar">
    <head>
        <title>عرض الموظفين</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!--<link rel="stylesheet" type="text/css"  href="View.css">-->
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">
        
        <style> 
            
 *
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html
{
   font-size: 10px; 
}

body
{
    overflow-x: hidden;
}

.bodyContent a
{
    text-decoration: none;
    color: #000;
}

section
{
    padding: 10rem 0;
    background-color:  #fff; 
}

.heading
{
    text-transform: uppercase;
    font-size: 3.5rem;
    margin-left: -3px;
    margin-bottom: 5rem;
    text-align: right;
    position: relative;
    
}

.heading::after
{
    content: "";
    width: 10rem;
    height: 8rem;
    position: absolute;
    bottom: -2rem;
    left: 50%;
    transform: translateX(-50%);
    border-radius: 2rem;  
}

.Wrapper1
{
    display: flex;
    align-items:  center;
    align-content:  center;
    flex-direction: column;
}

.bodyCard
{
    width: 32rem;
    display: flex;
    background-color:  #F1F1F1;
    flex-direction: column;
    align-items: center;
    justify-content:  center;
    margin: 2rem 0;
    box-shadow: .5rem .5rem 3rem #959D98;
}

.bodyCard .card-img
{
    width: 100%;
    height: 26rem;
    object-fit: cover;
    clip-path: polygon(0 0, 100% 0, 100% 78%, 0% 100%);

}

.profile-img
{
    width: 15rem;
    height: 15rem;
    object-fit: cover;
    border-radius: 50%;
    margin-top: -11rem;
    z-index: 999;
    border: 1px solid #000;
}

.bodyCard h1
{
    font-size: 2.5rem;
    color: #000;
    margin: 1.5rem 0;  
}

.job-title
{
    color: #000;
    font-size: 1.5rem;
    font-weight: 300;
    
}

.about
{
    font-size: 1.5rem;
    margin: 1.5rem 0;
    font-style: italic;
    text-align: center;
    color: #959D98;
}

.bodyCard .btn
{
    padding: 1rem 2.5rem;
    background-color:  #959D98;
    border-radius: 2rem;
    margin: 1rem 0;
    text-transform: uppercase;
    font-size: 1.4rem;
    color:#fff;
    transition: all .5s;
    outline: none;
}

.bodyCard .btn:hover
{
    transform:  translateY(-2px);
    box-shadow: .5rem .5rem 2rem #777;
    
}

.bodyCard .btn:active
{
    transform:  translateY(0);
    box-shadow: none;
    
}

@media screen and (min-width: 700px)
{
    .Wrapper1
    {
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }
    
    .bodyCard
    {
        margin: 2rem;
        transition: transform .5s;
    }
    
    @keyframes fadeIn
    {
        from{
            opacity: 0;
        }
        to{
            opacity: 1;
        }
    }
        .bodyCard:nth-child(1)
        {
            animation: fadeIn .5s .5s backwards;
        }
        .bodyCard:nth-child(2)
        {
            animation: fadeIn .5s 1s backwards;
        }
        .bodyCard:nth-child(3)
        {
            animation: fadeIn .5s 1.5s backwards;
        }
        .bodyCard:nth-child(4)
        {
            animation: fadeIn .5s 2s backwards;
        }
        .bodyCard:nth-child(5)
        {
            animation: fadeIn .5s 2.5s backwards;
        }
   
        .bodyCard:hover
        {
            transform: scale(1.05);
        }
}

        /*footer */

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
        <section class="bodyContent">
            <div class="container">
                <h1 class="heading">عرض الموظفين</h1>
                <div class="card-wrapper Wrapper1">
                    <div class="card bodyCard">
                        <img src="ii.jpg" alt="card" class="card-img">
                        <img src="user.png" alt="profile" class="profile-img">
                        <h1>شروق الزهراني</h1>
                        <p class="job-title">مبرمجة</p>
                        <p class="about">تخصص علوم حاسب</p>
                        <a href="#" class="btn" >تواصل</a> 
                        
                    </div>
                     <div class="card bodyCard">
                        <img src="ii.jpg" alt="card" class="card-img">
                        <img src="user.png" alt="profile" class="profile-img">
                        <h1>فاطمة الملحم</h1>
                        <p class="job-title">مصممة مواقع</p>
                        <p class="about">تخصص علوم حاسب</p>
                        <a href="#" class="btn" >تواصل</a> 
                        
                    </div>
                     <div class="card bodyCard">
                        <img src="ii.jpg" alt="card" class="card-img">
                        <img src="user.png" alt="profile" class="profile-img">
                        <h1>فاطمة السلمان</h1>
                        <p class="job-title">مهندسة برمجيات</p>
                        <p class="about">تخصص علوم حاسب</p>
                        <a href="#" class="btn" >تواصل</a> 
                        
                    </div>
                     <div class="card bodyCard">
                        <img src="ii.jpg" alt="card" class="card-img">
                        <img src="user.png" alt="profile" class="profile-img">
                        <h1>مزنة الدوسري</h1>
                        <p class="job-title">مبرمجة</p>
                        <p class="about">تخصص علوم حاسب</p>
                        <a href="#" class="btn" >تواصل</a> 
                        
                    </div>
                     <div class="card bodyCard">
                        <img src="ii.jpg" alt="card" class="card-img">
                        <img src="user.png" alt="profile" class="profile-img">
                        <h1>منيرة الميدني</h1>
                        <p class="job-title">مصممة مواقع</p>
                        <p class="about">تخصص علوم حاسب</p>
                        <a href="#" class="btn" >تواصل</a> 
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid sec-footer">
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
<section class="container-fluid sec-sub-footer">
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
        
    </body>
</html>

