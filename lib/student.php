
<?php include'Database.php';?>


<?php
	class Student{
			private $db;
			public function __construct(){
				$this->db = new Database();
			}

			public function getStudent(){
				$query = "SELECT * FROM tbl_student";
				$result = $this->db->select($query);
				return $result;

			}
			public function InsertData($Data){
					$name =mysqli_real_escape_string($this->db->link, $Data['name']);
					$roll =mysqli_real_escape_string($this->db->link, $Data['roll']);
				   if(empty($name) || empty($roll)){
				   	$msg = "<div class='alert alert-danger'><strong>Error !!</strong>Field Must Not Be Empty!!</div>";
				   	return $msg;
				   }
				   $query = "INSERT INTO tbl_student(name,roll) VALUES('$name','$roll')";
				    $insert = $this->db->insert($query);
				   $query = "INSERT INTO tbl_attendence(roll) VALUES('$roll')";
				  
				   $insert = $this->db->insert($query);
				   if($insert){
				   	$msg = "<div class='alert alert-success'><strong>Success !!</strong>Data insert successfull !!</div>";
				   	return $msg;
				   }
				   else{
				    $msg = "<div class='alert alert-danger'><strong>Fail !!</strong>Data not insert   !!</div>";
				   	return $msg;
				   }

			}
			public function InsertAttendance($Data=array(),$cur_date){
				$attend = $Data['attend'];
		  $query = "SELECT  DISTINCT attend_date FROM  tbl_attendence ";
				$getData = $this->db->select($query);

				while($result = $getData->fetch_assoc()){
					$db_date = $result['attend_date'];
				
				if($db_date == $cur_date){
						$msg = "<div class='alert alert-danger'><strong> Error !! </strong>Attendance All Ready Taken !!</div>";
				   	return $msg;
				}
			}

			
			foreach ($attend as $key_att => $att_value) {
				 if($att_value == "present"){
				 	$stu_query = "INSERT INTO tbl_attendence(roll,attend,attend_date) VALUES('$key_att','present',now())";
				 	$insert_Data = $this->db->insert($stu_query);
				 }elseif ($att_value == "absent") {
				 	 $stu_query = "INSERT INTO tbl_attendence(roll,attend,attend_date) VALUES('$key_att','absent',now()) ";
				 	 $insert_Data = $this->db->insert($stu_query);
				 }
			}
			  if($insert_Data){
				   	$msg = "<div class='alert alert-success'><strong>Success !! </strong>Attendance Taken successfull !!</div>";
				   	return $msg;
				   }
				   else{
				    $msg = "<div class='alert alert-danger'><strong>Fail !! </strong> Attendance Taken Fail!!</div>";
				   	return $msg;
				   }

}
	public function getDateList(){
		$query = "SELECT DISTINCT attend_date FROM tbl_attendence";
		$result = $this->db->select($query);
		return $result;

	}

	public function getStudentList($dt){
		$query = "SELECT tbl_student.name, tbl_attendence.*
			FROM tbl_student
			INNER JOIN tbl_attendence
			ON tbl_student.roll = tbl_attendence.roll
			WHERE attend_date = '$dt';
		";
		$result = $this->db->select($query);
		return $result;
	}

	public function UpdateAttendance($Data,$dt){
		$attend = $Data['attend'];
		foreach ($attend as $key_att => $att_value) {
				 if($att_value == "present"){
				 	$query = "UPDATE tbl_attendence 
				 		SET attend = 'present'
				 			WHERE roll = '".$key_att."' AND attend_date = '".$dt."'
				 	";
				 	$update_Data = $this->db->update($query);
				 }elseif ($att_value == "absent") {
				 	 $query = "UPDATE tbl_attendence
				 	 	SET attend = 'absent'
				 	 	WHERE roll = '".$key_att."' AND attend_date = '".$dt."'
				 	 ";
				 	 $update_Data = $this->db->update($query);
				 }
			}
			  if($update_Data){
				   	$msg = "<div class='alert alert-success'><strong>Success !! </strong>Attendance Update successfull !!</div>";
				   	return $msg;
				   }
				   else{
				    $msg = "<div class='alert alert-danger'><strong>Fail !! </strong> Attendance Update Fail!!</div>";
				   	return $msg;
				   }

	}
}


?>

