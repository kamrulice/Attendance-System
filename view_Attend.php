
		<?php include'inc/header.php';?>
		<?php include'lib/student.php';?>

		<?php
			$stu = new Student();
			$cur_date = date('Y-m-d');

		?>

			<div class="panel panel-default" style="border:4px solid #F2F2F2;">
			 
				<div class="panel-heading">
					<h2>
						<a href="add.php" class="btn btn-success">Add Students</a>
						<a href="index.php" class="btn btn-info" style="float:right;">Take Attendance</a>
					</h2>
				</div>
				<div class="panel-body" style="border:10px solid #FFFFFF;">

					<form action="" method="post">
						<table class="table table-striped">
							<tr>
								<th width="30%">Serial</th>
								<th width="50%">Attendance Date</th>
								<th width="20%">Action</th>
							</tr>
					<?php 
							$stu = new Student();

						$getData = $stu->getDateList();
						if($getData){
						$i=0;
						foreach ($getData as $value) {
							$i++;
					?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $value['attend_date']; ?></td>
						 
						<td>
							<a href="student_view.php? dtt=<?php echo $value['attend_date'];?>">View</a>
						</td>
					</tr>
						 
						 <?php } } ?>
							 
						</table>
					</form>
					
				</div>
			</div>

<?php include'inc/footer.php';?>

		