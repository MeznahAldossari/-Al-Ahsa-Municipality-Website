<?php
?>
<!DOCTYPEhtml>
<html dir="ltr" lang=en>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <title>Footer - Index</title>
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
<style>

body {
  font-family: "Droid Arabic Kufi", Droid Arabic Kufi;
  color: #444444;
}

a {
  color: #9a4b3f;
}

a:hover {
  color: #caaba3;
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Droid Arabic Kufi", Droid Arabic Kufi;
}

/*--------------------------------------------------------------
# Back to top button
--------------------------------------------------------------*/
.back-to-top {
  position: fixed;
  display: none;
  right: 15px;
  bottom: 15px;
  z-index: 99999;
}

.back-to-top i {
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  width: 40px;
  height: 40px;
  border-radius: 4px;
  background: #9a4b3f;
  color: #fff;
  transition: all 0.4s;
}

.back-to-top i:hover {
  background: #eae0ce;
  color: #fff;
}

/*--------------------------------------------------------------
# Disable AOS delay on mobile
--------------------------------------------------------------*/
@media screen and (max-width: 768px) {
  [data-aos-delay] {
    transition-delay: 0 !important;
  }
}

/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
    font-family: "Droid Arabic Kufi", Droid Arabic Kufi;
  height: 200px;
  z-index: 997;
  transition: all 0.5s;
}

#header.header-scrolled {
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  height: 200px;
  background: #fff;
}

#header .logo h1 {
  font-size: 32px;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-weight: 700;
  letter-spacing: 1px;
}

#header .logo h1 a, #header .logo h1 a:hover {
  color: #222222;
  text-decoration: none;
}

#header .logo img {
  padding: 0;
  margin: 0;
  max-height: 180px;
}

@media (max-width: 768px) {
  #header {
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    height: 60px;
    background: #fff;
  }
  #header .logo h1 {
    font-size: 28px;
  }
}

/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Desktop Navigation */
.nav-menu, .nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu > ul > li {
  position: relative;
  white-space: nowrap;
  float: left;
}

.nav-menu a {
  display: block;
  position: relative;
  color: #555555;
  padding: 8px 0 12px 25px;
  transition: 0.3s;
  font-size: 30px;
  font-family: "Droid Arabic Kufi", Droid Arabic Kufi;
}

.nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
  color: #3498db;
  text-decoration: none;
}

.nav-menu .get-started a {
  background: #3498db;
  color: #fff;
  border-radius: 50px;
  margin: 0 0 0 30px;
  padding: 10px 25px;
}

.nav-menu .get-started a:hover {
  background: #57aae1;
  color: #fff;
}

.nav-menu .drop-down ul {
  display: block;
  position: absolute;
  left: 25px;
  top: calc(100% + 30px);
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  padding: 10px 0;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: ease all 0.3s;
  border-radius: 5px;
}

.nav-menu .drop-down:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.nav-menu .drop-down li {
  min-width: 180px;
  position: relative;
}

.nav-menu .drop-down ul a {
  padding: 10px 20px;
  font-size: 14px;
  text-transform: none;
  color: #222222;
}

.nav-menu .drop-down ul a:hover, .nav-menu .drop-down ul .active > a, .nav-menu .drop-down ul li:hover > a {
  color: #3498db;
}

.nav-menu .drop-down > a:after {
  content: "\ea99";
  font-family: "Droid Arabic Kufi", Droid Arabic Kufi;
  padding-left: 5px;
}

.nav-menu .drop-down .drop-down ul {
  top: 0;
  left: calc(100% - 30px);
}

.nav-menu .drop-down .drop-down:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
}

.nav-menu .drop-down .drop-down > a {
  padding-right: 35px;
}

.nav-menu .drop-down .drop-down > a:after {
  content: "\eaa0";
  font-family:"Droid Arabic Kufi", Droid Arabic Kufi;
  position: absolute;
  right: 15px;
}

@media (max-width: 1366px) {
  .nav-menu .drop-down .drop-down ul {
    left: -90%;
  }
  .nav-menu .drop-down .drop-down:hover > ul {
    left: -100%;
  }
  .nav-menu .drop-down .drop-down > a:after {
    content: "\ea9d";
  }
}

/* Mobile Navigation */
.mobile-nav-toggle {
  position: fixed;
  right: 15px;
  top: 15px;
  z-index: 9998;
  border: 0;
  background: none;
  font-size: 24px;
  transition: all 0.4s;
  outline: none !important;
  line-height: 1;
  cursor: pointer;
  text-align: right;
}

.mobile-nav-toggle i {
  color: #222222;
}

.mobile-nav {
  position: fixed;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  z-index: 9999;
  overflow-y: auto;
  background: #fff;
  transition: ease-in-out 0.2s;
  opacity: 0;
  visibility: hidden;
  border-radius: 10px;
  padding: 10px 0;
}

.mobile-nav * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.mobile-nav a {
  display: block;
  position: relative;
  color: #222222;
  padding: 10px 20px;
  font-weight: 500;
  outline: none;
}

.mobile-nav a:hover, .mobile-nav .active > a, .mobile-nav li:hover > a {
  color: #3498db;
  text-decoration: none;
}

.mobile-nav .get-started {
  text-align: center;
  margin-top: 10px;
}

.mobile-nav .get-started a {
  background: #3498db;
  color: #fff;
  border-radius: 50px;
  margin: 0 15px;
  padding: 10px 30px;
  display: inline-block;
}

.mobile-nav .get-started a:hover {
  background: #57aae1;
  color: #fff;
}

.mobile-nav .drop-down > a:after {
  content: "\ea99";
  font-family: "Droid Arabic Kufi", Droid Arabic Kufi;
  padding-left: 10px;
  position: absolute;
  right: 15px;
}

.mobile-nav .active.drop-down > a:after {
  content: "\eaa1";
}

.mobile-nav .drop-down > a {
  padding-right: 35px;
}

.mobile-nav .drop-down ul {
  display: none;
  overflow: hidden;
}

.mobile-nav .drop-down li {
  padding-left: 20px;
}

.mobile-nav-overly {
  width: 100%;
  height: 100%;
  z-index: 9997;
  top: 0;
  left: 0;
  position: fixed;
  background: rgba(9, 9, 9, 0.6);
  overflow: hidden;
  display: none;
  transition: ease-in-out 0.2s;
}

.mobile-nav-active {
  overflow: hidden;
}

.mobile-nav-active .mobile-nav {
  opacity: 1;
  visibility: visible;
}

.mobile-nav-active .mobile-nav-toggle i {
  color: #fff;
}
/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 60px 0;
  overflow: hidden;
}

.section-bg {
  background-color: #f7fbfe;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  font-size: 32px;
  font-weight: bold;
  text-transform: uppercase;
  position: relative;
  color: #9A4B3F;
}

.section-title h2::before, .section-title h2::after {
  content: '';
  width: 50px;
  height: 2px;
  background: #9A4B3F;
  display: inline-block;
}

.section-title h2::before {
  margin: 0 15px 10px 0;
}

.section-title h2::after {
  margin: 0 0 10px 15px;
}

.section-title p {
  margin: 15px 0 0 0;
}

/*--------------------------------------------------------------
# Services
--------------------------------------------------------------*/
.services .icon-box {
  padding: 30px;
  position: relative;
  overflow: hidden;
  background: #fff;
  box-shadow: 0 0 29px 0 rgba(68, 88, 144, 0.12);
  transition: all 0.3s ease-in-out;
  border-radius: 8px;
  z-index: 1;
}

.services .icon-box::before {
  content: '';
  position: absolute;
  background: #e1f0fa;
  right: -60px;
  top: -40px;
  width: 100px;
  height: 100px;
  border-radius: 50px;
  transition: all 0.3s;
  z-index: -1;
}

.services .icon-box:hover::before {
  background: #3498db;
  right: 0;
  top: 0;
  width: 100%;
  height: 100%;
  border-radius: 0px;
}

.services .icon {
  margin: 0 auto 20px auto;
  padding-top: 10px;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
  width: 60px;
  height: 60px;
  background: #3498db;
  transition: all 0.3s ease-in-out;
}

.services .icon i {
  font-size: 36px;
  line-height: 1;
  color: #fff;
}

.services .title {
  font-weight: 700;
  margin-bottom: 15px;
  font-size: 18px;
}

.services .title a {
  color: #111;
}

.services .description {
  font-size: 15px;
  line-height: 28px;
  margin-bottom: 0;
}

.services .icon-box:hover .title a, .services .icon-box:hover .description {
  color: #fff;
}

.services .icon-box:hover .icon {
  background: #fff;
}

.services .icon-box:hover .icon i {
  color: #3498db;
}

/*--------------------------------------------------------------
# More Services
--------------------------------------------------------------*/
.more-services {
  padding-top: 20px;
}

.more-services .card {
  border: 0;
  padding: 160px 20px 20px 20px;
  position: relative;
  width: 100%;
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
}

.more-services .card-body {
  z-index: 10;
  background: rgba(255, 255, 255, 0.9);
  padding: 15px 30px;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
  transition: 0.3s;
  transition: ease-in-out 0.4s;
  border-radius: 5px;
}

.more-services .card-title {
  font-weight: 700;
  text-align: center;
  margin-bottom: 15px;
}

.more-services .card-title a {
  color: #222222;
}

.more-services .card-text {
  color: #5e5e5e;
}

.more-services .read-more a {
  color: #777777;
  text-transform: uppercase;
  font-weight: 600;
  font-size: 12px;
  transition: 0.4s;
}

.more-services .read-more a:hover {
  text-decoration: underline;
}

.more-services .card:hover .card-body {
  background: #3498db;
}

.more-services .card:hover .read-more a, .more-services .card:hover .card-title, .more-services .card:hover .card-title a, .more-services .card:hover .card-text {
  color: #fff;
}
/*--------------------------------------------------------------
# Features
--------------------------------------------------------------*/
.features .icon-box {
  display: flex;
  align-items: center;
  padding: 20px;
  background: #f6f6f6;
  transition: ease-in-out 0.3s;
}

.features .icon-box i {
  font-size: 32px;
  padding-right: 10px;
  line-height: 1;
}

.features .icon-box h3 {
  font-weight: 700;
  margin: 0;
  padding: 0;
  line-height: 1;
  font-size: 16px;
}

.features .icon-box h3 a {
  color: #222222;
  transition: ease-in-out 0.3s;
}

.features .icon-box h3 a:hover {
  color: #3498db;
}

.features .icon-box:hover {
  background: #eef7fc;
}

/*--------------------------------------------------------------
# Testimonials
--------------------------------------------------------------*/
.testimonials .testimonial-wrap {
  padding-left: 50px;
}

.testimonials .testimonial-item {
  box-sizing: content-box;
  padding: 30px 30px 30px 60px;
  margin: 30px 15px;
  min-height: 200px;
  box-shadow: 0px 2px 12px rgba(0, 0, 0, 0.08);
  position: relative;
  background: #fff;
}

.testimonials .testimonial-item .testimonial-img {
  width: 90px;
  border-radius: 10px;
  border: 6px solid #fff;
  position: absolute;
  left: -45px;
}

.testimonials .testimonial-item h3 {
  font-size: 18px;
  font-weight: bold;
  margin: 10px 0 5px 0;
  color: #111;
}

.testimonials .testimonial-item h4 {
  font-size: 14px;
  color: #999;
  margin: 0;
}

.testimonials .testimonial-item .quote-icon-left, .testimonials .testimonial-item .quote-icon-right {
  color: #e1f0fa;
  font-size: 26px;
}

.testimonials .testimonial-item .quote-icon-left {
  display: inline-block;
  left: -5px;
  position: relative;
}

.testimonials .testimonial-item .quote-icon-right {
  display: inline-block;
  right: -5px;
  position: relative;
  top: 10px;
}

.testimonials .testimonial-item p {
  font-style: italic;
  margin: 15px auto 15px auto;
}

.testimonials .owl-nav, .testimonials .owl-dots {
  margin-top: 5px;
  text-align: center;
}

.testimonials .owl-dot {
  display: inline-block;
  margin: 0 5px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #ddd !important;
}

.testimonials .owl-dot.active {
  background-color: #3498db !important;
}

@media (max-width: 767px) {
  .testimonials .testimonial-wrap {
    padding-left: 0;
  }
  .testimonials .testimonial-item {
    padding: 30px;
    margin: 15px;
  }
  .testimonials .testimonial-item .testimonial-img {
    position: static;
    left: auto;
  }
}

/*--------------------------------------------------------------
# Portfolio
--------------------------------------------------------------*/
.portfolio .portfolio-item {
  margin-bottom: 30px;
}

.portfolio #portfolio-flters {
  padding: 0;
  margin: 0 auto 20px auto;
  list-style: none;
  text-align: center;
}

.portfolio #portfolio-flters li {
  cursor: pointer;
  display: inline-block;
  padding: 8px 15px 10px 15px;
  font-size: 14px;
  font-weight: 600;
  line-height: 1;
  text-transform: uppercase;
  color: #222222;
  margin-bottom: 5px;
  transition: all 0.3s ease-in-out;
  border-radius: 3px;
}

.portfolio #portfolio-flters li:hover, .portfolio #portfolio-flters li.filter-active {
  color: #fff;
  background: #3498db;
}

.portfolio #portfolio-flters li:last-child {
  margin-right: 0;
}

.portfolio .portfolio-wrap {
  transition: 0.3s;
  position: relative;
  overflow: hidden;
  z-index: 1;
  background: rgba(34, 34, 34, 0.6);
}

.portfolio .portfolio-wrap::before {
  content: "";
  background: rgba(34, 34, 34, 0.6);
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  transition: all ease-in-out 0.3s;
  z-index: 2;
  opacity: 0;
}

.portfolio .portfolio-wrap img {
  transition: all ease-in-out 0.3s;
}

.portfolio .portfolio-wrap .portfolio-info {
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 3;
  transition: all ease-in-out 0.3s;
  display: flex;
  flex-direction: column;
  justify-content: flex-end;
  align-items: flex-start;
  padding: 20px;
}

.portfolio .portfolio-wrap .portfolio-info h4 {
  font-size: 20px;
  color: #fff;
  font-weight: 600;
}

.portfolio .portfolio-wrap .portfolio-info p {
  color: rgba(255, 255, 255, 0.7);
  font-size: 14px;
  text-transform: uppercase;
  padding: 0;
  margin: 0;
  font-style: italic;
}

.portfolio .portfolio-wrap .portfolio-links {
  text-align: center;
  z-index: 4;
}

.portfolio .portfolio-wrap .portfolio-links a {
  color: #fff;
  margin: 0 5px 0 0;
  font-size: 28px;
  display: inline-block;
  transition: 0.3s;
}

.portfolio .portfolio-wrap .portfolio-links a:hover {
  color: #3498db;
}

.portfolio .portfolio-wrap:hover::before {
  opacity: 1;
}

.portfolio .portfolio-wrap:hover img {
  transform: scale(1.2);
}

.portfolio .portfolio-wrap:hover .portfolio-info {
  opacity: 1;
}

/*--------------------------------------------------------------
# Team
--------------------------------------------------------------*/
.team .member {
  margin-bottom: 20px;
  overflow: hidden;
  text-align: center;
  border-radius: 5px;
  background: #fff;
  box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
}

.team .member .member-img {
  position: relative;
  overflow: hidden;
}

.team .member .social {
  position: absolute;
  left: 0;
  bottom: 0;
  right: 0;
  height: 40px;
  opacity: 0;
  transition: ease-in-out 0.3s;
  text-align: center;
  background: rgba(255, 255, 255, 0.85);
}

.team .member .social a {
  transition: color 0.3s;
  color: #222222;
  margin: 0 10px;
  padding-top: 8px;
  display: inline-block;
}

.team .member .social a:hover {
  color: #3498db;
}

.team .member .social i {
  font-size: 18px;
  margin: 0 2px;
}

.team .member .member-info {
  padding: 25px 15px;
}

.team .member .member-info h4 {
  font-weight: 700;
  margin-bottom: 5px;
  font-size: 18px;
  color: #222222;
}

.team .member .member-info span {
  display: block;
  font-size: 13px;
  font-weight: 400;
  color: #aaaaaa;
}

.team .member .member-info p {
  font-style: italic;
  font-size: 14px;
  line-height: 26px;
  color: #777777;
}

.team .member:hover .social {
  opacity: 1;
}

/*--------------------------------------------------------------
# Pricing
--------------------------------------------------------------*/
.pricing .box {
  padding: 20px;
  background: #f9f9f9;
  text-align: center;
  border-radius: 8px;
  position: relative;
  overflow: hidden;
  border: 2px solid #f9f9f9;
}

.pricing .box h3 {
  font-weight: 400;
  padding: 15px;
  margin-top: 15px;
  font-size: 18px;
  font-weight: 600;
  color: #222222;
}

.pricing .box h4 {
  font-size: 42px;
  color: #3498db;
  font-weight: 500;
  font-family: "Droid Arabic Kufi", Droid Arabic Kufi;
  margin-bottom: 20px;
}

.pricing .box h4 sup {
  font-size: 20px;
  top: -15px;
  left: -3px;
}

.pricing .box h4 span {
  color: #bababa;
  font-size: 16px;
  font-weight: 300;
}

.pricing .box ul {
  padding: 0;
  list-style: none;
  color: #222222;
  text-align: center;
  line-height: 20px;
  font-size: 14px;
}

.pricing .box ul li {
  padding-bottom: 16px;
}

.pricing .box ul i {
  color: #3498db;
  font-size: 18px;
  padding-right: 4px;
}

.pricing .box ul .na {
  color: #ccc;
  text-decoration: line-through;
}

.pricing .box .btn-wrap {
  padding: 15px;
  text-align: center;
}

.pricing .box .btn-buy {
  display: inline-block;
  padding: 10px 40px 12px 40px;
  border-radius: 50px;
  border: 2px solid #3498db;
  color: #3498db;
  font-size: 14px;
  font-weight: 400;
  font-family: "Droid Arabic Kufi", Droid Arabic Kufi;
  font-weight: 600;
  transition: 0.3s;
}

.pricing .box .btn-buy:hover {
  background: #3498db;
  color: #fff;
}

.pricing .recommended {
  border-color: #3498db;
}

.pricing .recommended .btn-buy {
  background: #3498db;
  color: #fff;
}

.pricing .recommended .btn-buy:hover {
  background: #2383c4;
  border-color: #2383c4;
}

/*--------------------------------------------------------------
# F.A.Q
--------------------------------------------------------------*/
.faq .faq-item {
  margin: 20px 0;
  padding: 20px 0;
  border-bottom: 1px solid #eeeeee;
}

.faq .faq-item i {
  color: #8bc4ea;
  font-size: 24px;
  float: left;
  line-height: 0;
  padding: 13px 0 0 0;
  margin: 0;
}

.faq .faq-item h4 {
  font-size: 16px;
  line-height: 26px;
  font-weight: 500;
  margin: 0 0 10px 32px;
  font-family: "Droid Arabic Kufi", Droid Arabic Kufi;
}

.faq .faq-item p {
  font-size: 15px;
}

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact .contact-about h3 {
  font-size: 28px;
  margin: 0 0 10px 0;
  padding: 0;
  line-height: 1;
  font-weight: 700;
  letter-spacing: 1px;
  color: #222222;
}

.contact .contact-about p {
  font-size: 14px;
  line-height: 24px;
  font-family: "Droid Arabic Kufi", Droid Arabic Kufi;
  color: #888;
}

.contact .social-links {
  padding-bottom: 20px;
}

.contact .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #fff;
  color: #C8444E;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
  border: 1px solid #3498db;
}

.contact .social-links a:hover {
  background: #3498db;
  color: #fff;
}

.contact .info {
  color: #444444;
}

.contact .info i {
  font-size: 32px;
  color: #C8444E;
  float: left;
  line-height: 1;
}

.contact .info p {
  padding: 0 0 10px 42px;
  line-height: 28px;
  font-size: 14px;
}

.contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input, .contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form button[type="submit"] {
  background:#C8444E;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

.contact .php-email-form button[type="submit"]:hover {
  background: #2383c4;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

/*--------------------------------------------------------------
# Breadcrumbs
--------------------------------------------------------------*/
.breadcrumbs {
  padding: 15px 0;
  background: #f3f3f3;
  min-height: 40px;
  margin-top: 80px;
}

.breadcrumbs h2 {
  font-size: 28px;
  font-weight: 400;
}

.breadcrumbs ol {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  padding: 0;
  margin: 0;
}

.breadcrumbs ol li + li {
  padding-left: 10px;
}

.breadcrumbs ol li + li::before {
  display: inline-block;
  padding-right: 10px;
  color: #3c3c3c;
  content: "/";
}

@media (max-width: 768px) {
  .breadcrumbs .d-flex {
    display: block !important;
  }
  .breadcrumbs ol {
    display: block;
  }
  .breadcrumbs ol li {
    display: inline-block;
  }
}

/*--------------------------------------------------------------
# Portfolio Details
--------------------------------------------------------------*/
.portfolio-details {
  padding-top: 20px;
}

.portfolio-details .portfolio-title {
  font-size: 26px;
  font-weight: 700;
  margin-bottom: 20px;
}

.portfolio-details .portfolio-details-carousel .owl-nav, .portfolio-details .portfolio-details-carousel .owl-dots {
  margin-top: 5px;
  text-align: center;
}

.portfolio-details .portfolio-details-carousel .owl-dot {
  display: inline-block;
  margin: 0 5px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #ddd !important;
}

.portfolio-details .portfolio-details-carousel .owl-dot.active {
  background-color: #3498db !important;
}

.portfolio-details .portfolio-info {
  padding-top: 45px;
}

.portfolio-details .portfolio-info h3 {
  font-size: 22px;
  font-weight: 400;
  margin-bottom: 20px;
}

.portfolio-details .portfolio-info ul {
  list-style: none;
  padding: 0;
  font-size: 15px;
}

.portfolio-details .portfolio-info ul li + li {
  margin-top: 10px;
}

.portfolio-details .portfolio-info p {
  font-size: 15px;
  padding: 15px 0 0 0;
}

@media (max-width: 992px) {
  .portfolio-details .portfolio-info {
    padding-top: 20px;
  }
}

/*--------------------------------------------------------------
# Contact
--------------------------------------------------------------*/
.contact .contact-about h3 {
  font-size: 28px;
  margin: 0 0 10px 0;
  padding: 0;
  line-height: 1;
  font-weight: 700;
  letter-spacing: 1px;
  color: #222222;
}

.contact .contact-about p {
  font-size: 14px;
  line-height: 24px;
  font-family: "Droid Arabic Kufi", Droid Arabic Kufi;
  color: #888;
}

.contact .social-links {
  padding-bottom: 20px;
}

.contact .social-links a {
  font-size: 18px;
  display: inline-block;
  background: #fff;
  color: #9a4b3f ;
  line-height: 1;
  padding: 8px 0;
  margin-right: 4px;
  border-radius: 50%;
  text-align: center;
  width: 36px;
  height: 36px;
  transition: 0.3s;
  border: 1px solid #a89374;
}

.contact .social-links a:hover {
  background: #Caaba3;
  color: #fff;
}

.contact .info {
  color: #444444;
}

.contact .info i {
  font-size: 32px;
  color: #9a4b3f;
  float: left;
  line-height: 1;
}

.contact .info p {
  padding: 0 0 10px 42px;
  line-height: 28px;
  font-size: 14px;
}

.contact .php-email-form .validate {
  display: none;
  color: red;
  margin: 0 0 15px 0;
  font-weight: 400;
  font-size: 13px;
}

.contact .php-email-form .error-message {
  display: none;
  color: #fff;
  background: #ed3c0d;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .sent-message {
  display: none;
  color: #fff;
  background: #18d26e;
  text-align: center;
  padding: 15px;
  font-weight: 600;
}

.contact .php-email-form .loading {
  display: none;
  background: #fff;
  text-align: center;
  padding: 15px;
}

.contact .php-email-form .loading:before {
  content: "";
  display: inline-block;
  border-radius: 50%;
  width: 24px;
  height: 24px;
  margin: 0 10px -6px 0;
  border: 3px solid #18d26e;
  border-top-color: #eee;
  -webkit-animation: animate-loading 1s linear infinite;
  animation: animate-loading 1s linear infinite;
}

.contact .php-email-form input, .contact .php-email-form textarea {
  border-radius: 0;
  box-shadow: none;
  font-size: 14px;
}

.contact .php-email-form button[type="submit"] {
  background:#9a4b3f ;
  border: 0;
  padding: 10px 24px;
  color: #fff;
  transition: 0.4s;
  border-radius: 50px;
}

.contact .php-email-form button[type="submit"]:hover {
  background: #caaba3;
}

@-webkit-keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

@keyframes animate-loading {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
/*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
#footer {
 
  background: #fff;
  box-shadow: 0px 0px 12px 0px rgba(0, 0, 0, 0.1);
  padding: 30px 0;
  color: #222222;
  font-size: 14px;
}

#footer .credits {
  font-size: 13px;
  padding-top: 5px;
  color: #222222;
}

#footer .footer-links a {
  color: #222222;
  padding-left: 15px;
}

#footer .footer-links a:first-child {
  padding-left: 0;
}

#footer .footer-links a:hover {
  color: #caaba3;
}

/*table*/

body {
	color:  #caaba3;
	background: #f5f5f5;
	
	font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
	background: #fff;
	padding: 20px 25px;
	border-radius: 3px;
	min-width: 1000px;
	box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
	padding-bottom: 15px;
	background: #eae0ce;
	color: #9a4b3f;
	padding: 16px 30px;
	min-width: 100%;
	margin: -20px -25px 10px;
	border-radius: 3px 3px 0 0;
}
.table-title h2 {
	margin: 5px 0 0;
	font-size: 24px;
}
.table-title .btn-group {
	float: right;
}
.table-title .btn {
	color: #fff;
	float: right;
	font-size: 13px;
	border: none;
	min-width: 50px;
	border-radius: 2px;
	border: none;
	outline: none !important;
	margin-left: 10px;
}
.table-title .btn i {
	float: left;
	font-size: 21px;
	margin-right: 5px;
}
.table-title .btn span {
	float: left;
	margin-top: 2px;
}
table.table tr th, table.table tr td {
	border-color: #e9e9e9;
	padding: 12px 15px;
	vertical-align: middle;
}
table.table tr th:first-child {
	width: 60px;
}
table.table tr th:last-child {
	width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
	background-color: #fcfcfc;
}
table.table-striped.table-hover tbody tr:hover {
	background: #f5f5f5;
}
table.table th i {
	font-size: 13px;
	margin: 0 5px;
	cursor: pointer;
}	
table.table td:last-child i {
	opacity: 0.9;
	font-size: 22px;
	margin: 0 5px;
}
table.table td a {
	font-weight: bold;
	color: #f1f1f1;
	display: inline-block;
	text-decoration: none;
	outline: none !important;
}
table.table td a:hover {
	color: #caaba3;
}
table.table td a.edit {
	color: #FFC107;
}
table.table td a.delete {
	color: #9a4b3f;
}
table.table td i {
	font-size: 19px;
}
table.table .avatar {
	border-radius: 50%;
	vertical-align: middle;
	margin-right: 10px;
}
.pagination {
	float: right;
	margin: 0 0 5px;
}
.pagination li a {
	border: none;
	font-size: 13px;
	min-width: 30px;
	min-height: 30px;
	color: #999;
	margin: 0 2px;
	line-height: 30px;
	border-radius: 2px !important;
	text-align: center;
	padding: 0 6px;
}
.pagination li a:hover {
	color: #666;
}	
.pagination li.active a, .pagination li.active a.page-link {
	background: #9a4b3f;
}
.pagination li.active a:hover {        
	background: #9a4b3f;
}
.pagination li.disabled i {
	color: #ccc;
}
.pagination li i {
	font-size: 16px;
	padding-top: 6px
}
.hint-text {
	float: left;
	margin-top: 10px;
	font-size: 13px;
}    
/* Custom checkbox */

.custom-checkbox {
	position: relative;
}
.custom-checkbox input[type="checkbox"] {    
	opacity: 0;
	position: absolute;
	margin: 5px 0 0 3px;
	z-index: 9;
}
.custom-checkbox label:before{
	width: 18px;
	height: 18px;
}
.custom-checkbox label:before {
	content: '';
	margin-right: 10px;
	display: inline-block;
	vertical-align: text-top;
	background: white;
	border: 1px solid #bbb;
	border-radius: 2px;
	box-sizing: border-box;
	z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	content: '';
	position: absolute;
	left: 6px;
	top: 3px;
	width: 6px;
	height: 11px;
	border: solid #000;
	border-width: 0 3px 3px 0;
	transform: inherit;
	z-index: 3;
	transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
	border-color: #9a4b3f;
	background: #9a4b3f;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
	border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
	color: #b8b8b8;
	cursor: auto;
	box-shadow: none;
	background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
	max-width: 400px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
	padding: 20px 30px;
}
.modal .modal-content {
	border-radius: 3px;
	font-size: 14px;
}
.modal .modal-footer {
	background: #ecf0f1;
	border-radius: 0 0 3px 3px;
}
.modal .modal-title {
	display: inline-block;
}
.modal .form-control {
	border-radius: 2px;
	box-shadow: none;
	border-color: #dddddd;
}
.modal textarea.form-control {
	resize: vertical;
}
.modal .btn {
	border-radius: 2px;
	min-width: 100px;
}	
.modal form label {
	font-weight: normal;
}	

    </style>
 
</head>

<body>
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up"><h2>&nbsp;للتواصل و الاستفسار</h2>
        </div>

        <div class="row">

          <div class="col-md-3 col-lg-2 col-xl-4 mx-auto mb-4 text-right " data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <h3><img src="amanaa.png" alt="logo" style="width:200px;"></h3>
              <p>© جميع حقوق الطبع والنشر محفوظة لدى أمانة الأحساء 2020 م.All Rights Are Reserved To Alhasa Municipalty </p>
              <div class="social-links">
                <a href="#"   <i class="fab fa-facebook-f white-text mr-4"> </i></a>
                <a href="#" <i class="fab fa-twitter white-text mr-4"> </i></a>
                <a href="#" <i class="fab fa-google-plus-g white-text mr-4"> </i></a>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-lg-2 col-xl-4 mx-auto mb-4 text-right " data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <p class="text-right"> 
                        <i class="fas fa-home mr-2 text-right mt-1 float-right">  </i> المملكة العربية السعودية,الأحساء</p>
                    <p>
                        <i class="fas fa-envelope mr-2 mt-1 pr-1 float-right">  </i> البريد الإلكتروني : <a href="mailto:info@alhasa.gov.sa" id="t">info@alhasa.gov.sa</a> </p>
                    <p>
                        <i class="fas fa-phone mr-2 mt-1 float-right">  </i> الهاتف : 0135825000</p>

            </div>
          </div>

          <div class="col-md-3 col-lg-4 col-xl-3 mb-4" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="الاسم" data-rule="minlen:4" data-msg="أدخل 4 أحرف على الأقل" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="البريد الإلكتروني" data-rule="email" data-msg="أدخل بريد إلكتروني صحيح" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="الموضوع" data-rule="minlen:4" data-msg="أدخل 8 أحرف على الأقل" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="الرجاء كتابة الرسالة" placeholder="الرسالة"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">إرسال</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>