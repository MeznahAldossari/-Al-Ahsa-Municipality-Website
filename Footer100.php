<?php ?>
<header>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css">

    <style> 
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
</header>



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

