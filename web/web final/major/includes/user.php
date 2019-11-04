<?php 



class User extends Db_object {

	protected static $db_table = "users";
	protected static $db_table_fields = array('username', 'password','email', 'mobile');
	public $user_id;
	public $username;
	public $password;
	public $email;
	public $mobile;


 



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

public function findUserByUsername($username) {
     global $database;
     $foundUser = "";
     try{
         $sql = "SELECT * FROM " . self::$db_table . " WHERE username = '{$username}'";
         $the_result_set = self::find_by_query($sql);
         $result_set = $database->query($sql);
            while($row = mysqli_fetch_array($result_set)){
             $foundUser = $row['username'];
         }
         return $foundUser;
     }
     catch(\Exception $e) {
         throw $e;
     }
 }
	
public function findUserByMobile($mobile) {
	global $database;
	
	try {
		$sql = "SELECT * FROM " . self::$db_table . " WHERE mobile = '{$mobile}'";
		$the_result_set = self::find_by_query($sql);
		$result_set = $database->query($sql);
			while($row = mysqli_fetch_array($result_set)) {
				$foundMobile = $row['mobile'];
			}
			return $foundMobile;
	}
	catch(\Exception $e) {
		throw $e;
	}
	
}
    
    
public function getPassword($findEmail){
    global $database;
    try {
        $sql = "SELECT * FROM " . self::$db_table . " WHERE email = '{$findEmail}'";
        $the_result_set = self::find_by_query($sql);
         $result_set = $database->query($sql);
            while($row = mysqli_fetch_array($result_set)){
             $getPass = $row['password'];
         }
         return $getPass;
    }
    catch(\Exception $e) {
         throw $e;
     }
}

public function getUser($user){
	global $database;
	try {
        $sql = "SELECT * FROM " . self::$db_table . " WHERE ";
		$sql .= "email = '{$user}' ";
         $the_result_array = self::find_by_query($sql);
		return !empty($the_result_array) ? array_shift($the_result_array) : false;

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



	public static function verify_user($username, $password ) {
		global $database;

		$username = $database->escape_string($username);
		$password = $database->escape_string($password);


		$sql = "SELECT * FROM " . self::$db_table . " WHERE ";
		$sql .= "username = '{$username}' ";
		$sql .= "AND password = '{$password}' ";
		$sql .= "LIMIT 1";

		$the_result_array = self::find_by_query($sql);

		return !empty($the_result_array) ? array_shift($the_result_array) : false;


}
	public function attest_user($email, $password) {
			global $database;
			try {
				$getHashed = $this->getPassword($email);
				$passVerify = password_verify($password, $getHashed);
				if(!$passVerify) {
					return false;
					exit();
				}
				else {
					$fetchUser = $this->getUser($email);
				}
				return $fetchUser;
				
			}
			catch (\Exception $e) {
				throw $e;
			}
	}

} // End of Class User














 ?>
