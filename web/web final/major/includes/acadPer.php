<?php 

class AcadPer extends Db_object {
	
	protected static $db_table = "academics_percentage";
	protected static $db_table_fields = array('operating_system_per', 'algorithm_per','programming_concept_per', 'software_eng_per', 'computer_net_per', 'electronics_per', 'computer_arch_per', 'mathematics_per','communication_per','user_id');
	public $id;
	public $operating_system_per;
	public $algorithm_per;
	public $programming_concept_per;
	public $software_eng_per;
	public $computer_net_per;
	public $electronics_per;
	public $computer_arch_per;
	public $mathematics_per;
	public $communication_per;
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