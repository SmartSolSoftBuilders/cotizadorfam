<?php 	
	class Data_model extends CI_Model {
		function Data_model(){
			// Call the Model constructor
			parent::__construct();
		}
		 
		public function getData($fechaInicio,$fechaFin){			
			$con=mysqli_connect("localhost","root","","fam");
		// Check connection
			if (mysqli_connect_errno())  
				echo "Failed to connect to MySQL: " . mysqli_connect_error();  	
			$sql="SELECT * FROM USER WHERE FECHA_USER>='".$fechaInicio."' AND FECHA_USER<='".$fechaFin."'";
			$result = mysqli_query($con,$sql);
			
			while($row = mysqli_fetch_array($result)){
			  $rows[] = $row;
			 }
			foreach($rows as $row){
				//echo $row['id_user'];
			}
			mysqli_close($con);
			return $rows;
		}
		
	}
?>