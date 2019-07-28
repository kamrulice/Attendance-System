
		<?php include'inc/header.php';?>
		<?php include'lib/student.php';?>

		<?php
			$stu = new Student();
			$cur_date = date('Y-m-d');
			$dt = $_GET['dtt'];
			if($_SERVER['REQUEST_METHOD']=='POST'){
					$updateAttendance = $stu->UpdateAttendance($_POST,$dt);

					}
					if(isset($updateAttendance)){
						echo $updateAttendance;
					}
					 

		?>

			<div class="panel panel-default" style="border:4px solid #F2F2F2;">
			 
				<div class="panel-heading">
					<h2>
						<a href="add.php" class="btn btn-success">Add Students</a>
						<a href="view_attend.php" class="btn btn-info" style="float:right;">Back</a>
					</h2>
				</div>
				<div class="panel-body" style="border:10px solid #FFFFFF;">
					<div class="date" style="text-align:center; font-size:20px; background:#F2F2F2; height:70px;     padding:20px; margin-bottom:20px;">
					<strong>Date </strong><?php  echo $dt; ?>
					</div>


					<form action="" method="post">
						<table class="table table-striped">
							<tr>
								 <th width="25%">Serial</th>
								<th width="25%">Student Name</th>
								<th width="25%">Student Roll</th>
								<th width="25%">Attendance</th>
							</tr>
					<?php 
							$stu = new Student();

						$getStudent = $stu->getStudentList($dt);
						if($getStudent ){
						$i=0;
						foreach ($getStudent  as $value) {
							$i++;
					?>
					 <tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $value['name']; ?></td>
						<td><?php echo $value['roll']; ?></td>
						<td>
							<input type="radio"  name="attend[<?php echo $value['roll']; ?>]" value="present" <?php if($value['attend']=="present"){echo "checked" ; }?>>P
							<input type="radio"  name="attend[<?php echo $value['roll']; ?>]" value="absent" <?php if($value['attend']=="absent"){echo "checked" ;} ?>>A
						</td>
					</tr>
					
						 
						 <?php } } ?>
						 <tr>
								<td colspan="4">
									<input type="submit" name="submit" value="Update" class="btn btn-primary">
								</td>
							</tr>
							 
						</table>
					</form>
					
				</div>
			</div>

			<script type="text/javascript">
			$(document).ready(function() {
				 $("form").submit(function(){
				 	var roll = true;
				 	$(':radio').each(function(){
				 		name = $(this).attr('name');
				 		if(roll && !$(':radio[name = "' + name + '"]:checked').length){
				 			alert(name + " Roll missing");
				 			
				 		  roll=false;
				 		}
				 	});
				 	return roll;
				 	

				 });
			});
		</script>

<?php include'inc/footer.php';?>

		