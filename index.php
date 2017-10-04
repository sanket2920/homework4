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

			echo htmlTags::horizontalRule();
		
			echo htmlTags::headingTwo("String Replace Demo");
			echo strings::stringReplace('-','/',$date);
			echo htmlTags::horizontalRule();
		
			echo htmlTags::headingTwo("String Comparison Demo");
			echo strings::stringCompare($date,$tar);
			echo htmlTags::horizontalRule();
			
			echo htmlTags::headingTwo("String Word Count Demo");
			echo strings::stringWordcount($date);
			echo htmlTags::horizontalRule();
			
			echo htmlTags::headingTwo("String Length Demo");
			echo strings::stringLength($date);
			echo htmlTags::horizontalRule();
			
			echo htmlTags::headingTwo("String ASCII Value Demo");
			echo strings::stringASCII('2');
			echo htmlTags::horizontalRule();
			
			echo htmlTags::headingTwo("String Last two characters : ");
			echo strings::stringCharacter($date,8);
			echo htmlTags::horizontalRule();
			
			echo htmlTags::headingTwo("String into Array Conversion demo:");
			echo strings::stringExplode("/",$date);
			echo htmlTags::horizontalRule();

			echo htmlTags::headingTwo("leap year demo");
			echo arrays::arrayLeap($year);
			echo htmlTags::horizontalRule();

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
				}else if(strcmp($string1,$string2)>0) {
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
			
			static public function stringASCII($string1){
				 return ord($string1);
			}

			static public function stringCharacter($string1,$value){
				return substr($string1,$value);
			}
			
			static public function stringExplode($value,$string1){
				 $arr= explode($value,$string1);

				 foreach($arr as $a){
					echo $a."</br>";
				}
			}	
		}
	class arrays {
		static public function arrayLeap($years){
			foreach($years as $year){
				arrays::checkLeapYear($year);
			}
		}
		
		static public function checkLeapYear($year) {
			$val = (($year%4==0)and($year%100!=0)or($year%400==0));

			switch($val) {
				case 1 : 
					echo ''.$year.' is a leap year'."</br>";
					break;
				default : 
					echo ''.$year.' is not a leap year'."</br>";
					break;
				}
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
