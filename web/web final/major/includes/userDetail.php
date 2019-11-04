<?php 



class UserDetail extends Db_object {

	protected static $db_table = "users_detail";
	protected static $db_table_fields = array('user_fullname', 'user_fathername','user_mothername', 'user_email', 'user_college', 'user_address_lineone', 'user_address_linetwo', 'user_address_city', 'user_address_state', 'user_address_zipcode', 'user_id');
	
	public $userdetail_id;
	public $user_fullname;
	public $user_fathername;
	public $user_mothername;
	public $user_email;
	public $user_college;
	public $user_address_lineone;
	public $user_address_linetwo;
	public $user_address_city;
	public $user_address_state;
	public $user_address_zipcode;
	public $user_id;
	
	
public function findUserByEmail($email) {
     global $database;
      $foundEmail = "";
     try{
         $sql = "SELECT * FROM " . self::$db_table . " WHERE email = '{$email}'";
         $result_set = $database->query($sql);
         while($row = mysqli_fetch_array($result_set)){
             $foundEmail = $row['email'];
         }
         return $foundEmail;
     }
     catch(\Exception $e) {
         throw $e;
     }
 }
	public function findDetailIdById($id) {
     global $database;
      $founduserdetailId = "";
     try{
         $sql = "SELECT * FROM " . self::$db_table . " WHERE user_id = '{$id}'";
         $result_set = $database->query($sql);
         while($row = mysqli_fetch_array($result_set)){
             $founduserdetailId = $row['userdetail_id'];
         }
         return $founduserdetailId;
     }
     catch(\Exception $e) {
         throw $e;
     }
 }
		
	public function find_by_content($content, $content_value) {
		global $database;
		try {
			$sql = "SELECT * FROM " . self::$db_table . " WHERE ";
			$sql .= "$content = '{$content_value}' ";
			 $the_result_array = self::find_by_query($sql);
		return !empty($the_result_array) ? array_shift($the_result_array) : false;

		}
		catch(\Exception $e) {
         throw $e;
		}
	}
	
	public function updateDetail() {
		global $database;


		$properties = $this->clean_properties();

		$properties_pairs = array();

		foreach ($properties as $key => $value) {
			$properties_pairs[] = "{$key}='{$value}'";
		}

		$sql = "UPDATE  " .static::$db_table . "  SET ";
		$sql .= implode(", ", $properties_pairs);
		$sql .= " WHERE userdetail_id= " . $database->escape_string($this->userdetail_id);
		$database->query($sql);

		return (mysqli_affected_rows($database->connection) == 1) ? true : false;



	} // end of the update detail method
	
	
	public function saveDetail() {

	return isset($this->userdetail_id) ? $this->updateDetail() : $this->create();

	}

	
	
	

	

} // End of Class UserDetail














 ?>
