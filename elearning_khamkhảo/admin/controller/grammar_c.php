<?php
include_once('model/grammar_m.php');
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
		$param = $_GET["param"];
		if ($param=='') {
			$grammars = $this->db->getGrammars();
			include_once("view/grammar_v.php");
		}

		if ($param=='grammar_edit') {
			session_start();
			$courses =  $this->db->getCourses();
			$id_grammar=$_GET["id_grammar"];
			$grammar = $this->db->getGrammar($id_grammar);
			if (isset($_POST['submit'])) {
				$courses = $this->db->getCourses();
				$tittle = $_POST["tittle"];
				$description = $_POST["description"];
				$content = $_POST["content"];
				$id_course=$_POST["id_course"];
				$id_teacher = $_SESSION["username_teacher"];
				$this->db->Update('grammar',array(
													'id_grammar'=>$id_grammar,
													'tittle'=>$tittle,
													'description'=>$description,
													'content'=>$content,
													'id_course'=>$id_course,
													'id_teacher'=>1,
													),'id_grammar='.$id_grammar);
				echo"123";
				header("location:index.php?action=grammar");
			}
			include_once("view/grammar_edit_v.php");
		}

		if ($param=='grammar_delete') {
			$id_grammar=$_GET["id_grammar"];
			$this->db->Delete('grammar','id_grammar='.$id_grammar);
			header("location:index.php?action=grammar");
		}
	}
}
?>