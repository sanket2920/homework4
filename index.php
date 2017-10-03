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
		
			$this->html .= htmlTags::headingTwo("String Replace Demo");
			$this->html .= strings::stringReplace('-','/',$date);
			$this->html .= htmlTags::horizontalRule();
		
			$this->html .= htmlTags::headingTwo("String Comparison Demo");
			$this->html .= strings::stringCompare($date,$tar);
			$this->html .= htmlTags::horizontalRule();
			
			$this->html .= htmlTags::headingTwo("String Word Count Demo");
			$this->html .= strings::stringWordcount($date);
			$this->html .= htmlTags::horizontalRule();
			
			$this->html .= htmlTags::headingTwo("String Length Demo");
			$this->html .= strings::stringLength($date);
			$this->html .= htmlTags::horizontalRule();

		}
		public function __destruct() {
			print($this->html);
		}
	}

		class strings {
  			static public function stringReplace($src,$target,$str){
		  		return str_replace($src,$target,$str);
				}
			static public function stringCompare($string1,$string2){
				if(strcmp($string1,$string2)==0){
					return "Oops";
				}else if(strcmp($string1,$string2)<0) {
					return "Future";
				}else {
					return "Past";
				}
			}
			static public function stringWordcount($string1){
				 	return str_word_count($string1);
			}

			static public function stringLength($string1){
				 	return strlen($string1);
			}

		}
	class htmlTags
	{
		static public function horizontalRule() {
	          	return '<hr>';
		}
		static public function headingTwo($text) {
			return '<h2>' . $text . '</h2>';
		}
		static public function headingFour($text) {
			return '<h4>' .$text . '</h4>';
		}
	}		
?>

