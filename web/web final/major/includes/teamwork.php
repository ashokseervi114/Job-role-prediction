<?php 

class Teamwork extends Db_object {
	
	protected static $db_table = "teamwork_skills";
	protected static $db_table_fields = array('senior_older_input', 'interested_in_games', 'behaviour_input', 'management_tech_input', 'hard_smart_worker', 'worked_as_team', 'user_id');
	public $id;
	public $senior_older_input;
	public $interested_in_games;
	public $behaviour_input;
	public $management_tech_input;
	public $hard_smart_worker;
	public $worked_as_team;
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