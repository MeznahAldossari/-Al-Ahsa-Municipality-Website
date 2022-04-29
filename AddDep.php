<?php
require 'AdminHeader.php';


?>
<!DOCTYPE html>
<html>
    <head dir="rtl" lang="ar">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <title>إضافة إدارة</title>
     
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        
        <link href="/path/to/bootstrap.min.css" rel="stylesheet">
<link href="/path/to/buttons.css" rel="stylesheet">
        <link rel="stylesheet" href="http://fonts.googleapis.com/earlyaccess/droidarabickufi.css" type="text/css">
        
        
       
        
        <style>
  

            .img-responsive {
                background-size: 170p,100%;
            }
            .hovereffect {
  width: 100%;
  height: 100%;
  float: left;
  overflow: hidden;
  position: relative;
  text-align: center;
  cursor: default;
  background: #959D98;
}

.hovereffect .overlay {
  width: 100%;
  height: 100%;
  position: absolute;
  overflow: hidden;
  top: 0;
  left: 0;
  padding: 50px 20px;
}

.hovereffect img {
  display: block;
  position: relative;
  max-width: none;
  width: calc(100% + 10px);
  height: 100%;
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(-10px,0,0);
  transform: translate3d(-10px,0,0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
    
}

.hovereffect:hover img {
  opacity: 0.4;
  filter: alpha(opacity=40);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
    
}

.hovereffect h2 {
  text-transform: uppercase;
  color: #fff;
  text-align: center;
  position: relative;
  font-size: 24px;
  overflow: hidden;
  padding: 15em 0;
  background-color: transparent;
}

.hovereffect h2:after {
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 2px;
  background: #fff;
  content: '';
  -webkit-transition: -webkit-transform 0.35s;
  transition: transform 0.35s;
  -webkit-transform: translate3d(-100%,0,0);
  transform: translate3d(-100%,0,0);
}

.hovereffect:hover h2:after {
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}

.hovereffect a, .hovereffect p {
  color: #FFF;
  opacity: 0;
  filter: alpha(opacity=0);
  -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
  transition: opacity 0.35s, transform 0.35s;
  -webkit-transform: translate3d(100%,0,0);
  transform: translate3d(100%,0,0);
}

.hovereffect:hover a, .hovereffect:hover p {
  opacity: 1;
  filter: alpha(opacity=100);
  -webkit-transform: translate3d(0,0,0);
  transform: translate3d(0,0,0);
}
            
        .left,.right{
            
height: 100vh;
width: 100%;

}
            @media screen and (min-width:768px){
                .left,.right {
                    
                }
            }
            
        
            
            .right {
                background-color:F1F1F1;
                  
            }
            
             .form-control:focus {
        border-color: #9A4B3F;
        box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.075) inset, 0px 0px 8px rgba(255, 100, 255, 0.5);
    }
            
            body {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
}
            footer {
    height: 10vh;
}

  
        </style>
    </head>
    
    

    
    
    <body>
        
     
        
        <div class="row no-gutters">
               <div  class="col-md-7 no-gutters">
        
        <div  class="left " > 
             <div class="hovereffect">
            <img class="img-responsive" src=image3.jpg style="background-size: 170vh,100%">
            <div class="overlay">
                <h2>أمانة الأحساء</h2>

                 </div>
            </div></div>
            
            </div> <!-- col 2 -->
            
                <div  class="col-md-5 no-gutters">
        <div class="right d-flex justify-content-center align-items-center text-right"> 
               <form>
 
             
          <div class="form-group">
      <label class="control-label" for="DepName">اسم الإدارة</label>
      <div class ="input-group">
          <div class="input-group-addon">
          <span class="glyphicon glyphicon-envelope"></span>
          </div>
          <input class="form-control" type="text" id="DepName"  name="DepName">
      
      </div>
    </div>
                  
      <div class="form-group">    
        <label for="goals">أهداف الإدارة</label>
        <textarea type="text" class="form-control" id="goals" name="goals"></textarea>
    </div>
                   
  
                   
      
   <div class="form-group">
      <label for="tasks">مهام الإدارة</label>
      <textarea type="text" class="form-control" id="tasks"  name="tasks"></textarea>
    </div>
       
                   <div class="form-group">
      <label for="address">العنوان</label>
      <input type="text" class="form-control" id="address"  name="address">
    </div>
                   
                               <div class="form-group">
      <label for="phone">الهاتف</label>
      <input type="text" class="form-control" id="phone"  name="phone">
    </div>
                
                   
                   <div class="form-group" style="padding-top: 0%;">
            <button type="button" class="btn btn-outline-dark btn-lg">إضافة</button>      
                       </div>
                   
                   
            </form>
            
            
                </div>
            </div> <!-- col 1 -->

          
                
                
                
            
    </div><!-- row -->

 
    
        
         <?php

require 'Footer100.php';

?>
    
       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    </body>
    
  
</html>