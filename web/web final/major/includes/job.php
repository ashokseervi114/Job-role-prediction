<?php 



class Job extends Db_object {
	protected static $db_table = "jobs_profile";
	protected static $db_table_b = "jobs";
	protected static $db_table_fields = array('user_id', 'job_role_id');
	public $id;
	public $user_id;
	public $job_role_id;
	
	
	
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
	
	
	public function findDetailIdById($id) {
     global $database;
      $foundDetailId = "";
     try{
         $sql = "SELECT * FROM " . self::$db_table . " WHERE user_id = '{$id}'";
         $result_set = $database->query($sql);
         while($row = mysqli_fetch_array($result_set)){
             $foundDetailId = $row['id'];
         }
         return $foundDetailId;
     }
     catch(\Exception $e) {
         throw $e;
     }
 }
	
	public function findJobByJobRoleId($job_role_id) {
		global $database;
		$findJobRole = "";
		try {
			$sql = "SELECT * FROM " . self::$db_table_b . " WHERE job_id = '{$job_role_id}'";
			$result_set = $database->query($sql);
			while($row = mysqli_fetch_array($result_set)) {
				$findJobRole = $row['suggested_job_role'];
			}
			return $findJobRole;
		} 
		catch(\Exception $e) {
         throw $e;
     } 
	}
	
	public function findAllJobs() {
     global $database;
    
	try {
		$sql = "SELECT * FROM " . static::$db_table_b . " ";
//		echo "<br>" .$sql . "<br>";
		$result_set = $database->query($sql);
		return $result_set;
		}
		catch(\Exception $e) {
         throw $e;
		}
	}
	
}