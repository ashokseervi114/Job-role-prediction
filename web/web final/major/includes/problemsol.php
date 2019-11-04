<?php 

class ProblemSol extends Db_object {
	
	protected static $db_table = "problem_solving_skills";
	protected static $db_table_fields = array('logical_quo_rates', 'hackathons_rates', 'code_skill_rates', 'talent_test_rates', 'memory_capability_rates', 'olympiads_rates', 'user_id');
	public $id;
	public $logical_quo_rates;
	public $hackathons_rates;
	public $code_skill_rates;
	public $talent_test_rates;
	public $memory_capability_rates;
	public $olympiads_rates;
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