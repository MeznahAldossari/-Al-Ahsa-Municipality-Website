<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPEhtml>
<html dir="ltr" lang=en>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>الإدارات المختصة</title>
  <meta content="" name="keywords">
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    
    


  <!-- Template Main CSS File -->
  <link href="assets/css/style2.css" rel="stylesheet">
    <script>
$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();
	
	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;                        
			});
		} else{
			checkbox.each(function(){
				this.checked = false;                        
			});
		} 
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>

</head>

<body>    
    <?php include("AdminHeader.php"); ?>

    <!-- =======Admins Section ======= -->
  <div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					
					
                    <div class="col-sm-6">
						<h2>الإدارات المختصة</h2>
					</div>
                    <div class="col-sm-6">
						
						<a href="#deleteEmployeeModal" class="btn btn-dark" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>حذف</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>حذف</th>
						<th>الهاتف</th>
                        <th>العنوان</th>
						<th>مهام الادارة</th>
						<th>أهداف الإدارة</th>
						<th>رقم الإدارة</th>
						<th>اسم الإدارة</th>				
					
					</tr>
				</thead>
				<tbody>
					<tr>
						
                        <td>
							
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
                        
						<td>0135387518</td>
						<td>الاحساء,الهفوف</td>
						<td>تجميل الحدائق العامة</td>
						<td>الإدارة المختصة لتقديم الخدمات للمستفيدين بشأن الحدائق والتجميل</td>
                        <td>1</td>
                         <td>الإدارة العامة للحدائق والتجميل</td>
                        
                        <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						
					</tr>
					<tr>
						
                        <td>
							
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
						<td>0135373915</td>
						<td>الاحساء,الهفوف</td>
						<td>زراعة ومياه وغيرها</td>
						<td> الإدارة المختصة لتقديم الخدمات للمستفيدين بشأن كل مايخص صحة البيئة</td>
                         <td>2</td>
                         <td>الإدارة العامة لصحة البيئة</td>
                        
                        <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox2" name="options[]" value="1">
								<label for="checkbox2"></label>
							</span>
						</td>
						
					</tr>
					<tr>
						
                        <td>
						
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
						<td>0135371849</td>
						<td>الأحساء,الهفوف</td>
						<td>بناء وغيرها</td>
						<td>الإدارة المختصة لتقديم خدمات المستفيدين بشأن كل مايخص التخطيط العمراني والمساحات</td>
                         <td>3</td>
                         <td>الإدارة العامة للتخطيط العمراني والمساحة</td>
                        
                        <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox3" name="options[]" value="1">
								<label for="checkbox3"></label>
							</span>
						</td>
						
					</tr>
					<tr>
						
                        <td>
							
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
						<td>0135273957</td>
						<td>الاحساء,الهفوف</td>
						<td>توفير خدمات الاراضي </td>
						<td>الإدارة المختصة لتقديم خدمات المستفيدين بشأن كل مايخص الأراضي والممتلكات العامة</td>
                         <td>4</td>
                         <td>الإدارة العامة للأراضي والممتلكات</td>
                        
                        <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox4" name="options[]" value="1">
								<label for="checkbox4"></label>
							</span>
						</td>
						
					</tr>					
					<tr>
						<td>
							
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
                        
						<td>0135316857</td>
						<td>الأحساء,الهفوف</td>
						<td>صيانة وتشغيل</td>
						<td>الإدارة المختصة لتقديم خدمات المستفيدين بشأن كل مايخص أعمال الصيانة </td>
						 <td>5</td>
                         <td>الإدارة العامة للتشغيل والصيانة</td>
                        <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="options[]" value="1">
								<label for="checkbox5"></label>
							</span>
						</td>
					</tr> 
				</tbody>
			</table>
			
		</div>
	</div>        
</div>
    
    
    <!-- Delete Modal HTML -->
<div id="deleteEmployeeModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form>
				<div class="modal-header">						
					<h4 class="modal-title">حذف إدارة</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>هل أنت متأكد من حذف هذه الإدارة؟</p>
					<p class="text-danger"><small>لايمكن التراجع عن حذف</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-dark" data-dismiss="modal" value="إلغاء">
					<input type="submit" class="btn btn-dark" value="حذف">
				</div>
			</form>
		</div>
	</div>
</div>
        <?php include("footer2.php"); ?>

    <!-- End Admins Section -->

   
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