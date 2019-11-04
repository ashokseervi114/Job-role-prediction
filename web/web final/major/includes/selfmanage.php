<?php 

class SelfManage extends Db_object {
	
	protected static $db_table = "self_management_skills";
	protected static $db_table_fields = array('longer_work_OnSystem', 'self_learning_capabilities', 'books_interest', 'relationship_status', 'salary_status', 'introvert_status', 'user_id');
	public $id;
	public $longer_work_OnSystem;
	public $self_learning_capabilities;
	public $books_interest;
	public $relationship_status;
	public $salary_status;
	public $introvert_status;
	public $user_id;
	
	
	
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

}