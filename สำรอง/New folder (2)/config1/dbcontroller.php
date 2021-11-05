<?php
class DBController{
	//กำหนด่าต่างๆสำหรับชื่อต่อฐานข้อมูล
	private $host = "localhost";
	private $user = "root";
	private $password = "12345678";
	private $database = "wed";
	private $conn ;
	
	//เริ่มต้นโหลดไฟล์ให้เรียกฟังก์ชั่นเชื่อต่อฐานจ้อมูล
	function __comstruct(){
		$this->conn = $this->connectDB();
	}
	
	//ฟังก์ชั่นสำหรับเชื่อมต่อฐานข้อมูล
	function connectDB() {
		$conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
		return $conn;
	}
	
	//ฟังก์ชั่นสำหรับคิวรี่ข้อมูล
	function runQuery($query){
		$result = mysqli_query($this->conn,$query);
		while($row=mysqli_fetch_assoc($result)){
			$resultset[]=$row;
		}
		if(!empty($resultset))
			return $resultset ;
		
	}
	//ฟังก์ชั่นสำหรับนับจำนวนแถว
	function numRows($query){
		$result  = mysqli_query($this->conn,$query);
		$rowcount = mysqli_num_rows($result);
		return $rowcount;
	}
	
}

?>