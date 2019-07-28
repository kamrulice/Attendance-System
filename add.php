
		<?php include'inc/header.php';?>
		<?php include'lib/student.php';?>

		<?php
			$stu = new Student();
			if($_SERVER['REQUEST_METHOD']=='POST'){
				$insertStudent = $stu->InsertData($_POST);
			}
			if(isset($insertStudent)){
				echo $insertStudent;
			}

		?>

			<div class="panel panel-default" style="border:4px solid #F2F2F2;">
			 	<h2>
						
						<a href="index.php" class="btn btn-info" style="float:right;">Back</a>
				</h2>
				<div class="panel-heading">
					
				</div>
				 
					<form action="" method="post" style="max-width:600px; margin:0 auto;">
						<div class="from-group">
							<label>Student Name</label>
							<input type="text" name="name" class="form-control">
						</div>
						<div class="from-group">
							<label>Student Roll</label>
							<input type="number" name="roll" class="form-control" >
						</div>
						 
							 <div class="from-group"><br>
							<input type="submit" name="submit" class="btn btn-primary" value="Add Student">
						 	</div>
						 
					</form>
					
				</div>
			</div>
<?php include'inc/footer.php';?>
  