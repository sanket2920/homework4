<?php
	$obj = new main();
	class main
	{
		private $html; 
		public function __construct()
		{
			$date =  date('Y-m-d', time());
			echo "The value of \$date: ".$date."<br>";
			$tar = "2017/05/24";		
			echo "The value of \$tar: ".$tar."<br>";
			$year = array("2012", "396", "300","2000", "1100", "1089");
			echo "The value of \$year: ";
			print_r($year);
			$this->html.=htmlTags::horizontalRule();
		}
		public function __destruct() {
			print($this->html);
		}
	}
	class htmlTags
	{
		static public function horizontalRule() {
	          	return '<hr>';
		}
		static public function headingOne($text) {
			return '<h1>' . $text . '</h1>';
		}
		static public function headingThree($text) {
			return '<h3>' .$text . '</h1>';
		}
	}		
?>

