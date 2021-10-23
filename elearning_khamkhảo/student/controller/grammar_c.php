<?php
include_once("student/model/grammar_m.php");
/**
* 
*/
class Grammar_c
{
	var $db;
	function __construct()
	{
		$this->db = new Grammar_m();
	}

	public function run(){
		$param = isset($_GET["param"])?$_GET["param"]:'';
		if ($param=='') {
			$grammars = $this->db->getGrammars();
			include_once("student/view/grammar_v.php");
		}
		if ($param=='grammar_all') {
			$id_grammar=$_GET["id_grammar"];
			$grammar = mysqli_fetch_assoc($this->db->getGrammar($id_grammar));
			include_once("student/view/grammar_all_v.php");
		}
	}
}
?>