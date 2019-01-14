<?php 

class sql extends PDO {

	private $conn;


	public function __construct(){
		$this->conn = new PDO("mysql=localhost;dbname=dbphp7", "root", "");
	}

	private function setParams($statement,$parameters = array ()){
    foreach ($parameters as $key => $value) {
        $this->setParam($statement,$key,$value);
    }
}
 
public function query($rawQuery,$param = array()){
 
    $stmt = $this->conn->prepare($rawQuery);
 
    $this->setParams($stmt,$param);
 
    $stmt->execute();
 
    return $stmt;
 


		
	}

	public function select($rawQuery, $params = array()):array {
		$stmt = $this->query($rawQuery, $params);

		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}




 ?>



