 <?php  

class Studentinfo{

     public $server='localhost';
     public $username='root';
     public $password='';
     public $dbname='work_db';

    function getconnection(){
    	 $conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);
    	 return $conn;
    }
    function insert_data($arr){

    	$n=$arr['name'];
    	$e=$arr['email'];
    	$p=$arr['phone'];
     $m=$arr['message'];

		$sql = "insert into contact(name,email,phone,message)values('$n','$e','$p','$m')";
        //echo $sql;die;
        $conn=$this->getconnection();

        if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
          }
          
          

		if($conn->query($sql)=== TRUE) {
		  $r= "New record created successfully";
		} else {
		  $r="Error: " . $sql . "<br>" . $conn->error;
		}

		return $r;
    }
}