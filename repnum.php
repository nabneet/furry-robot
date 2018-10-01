	<?php
	
		$number = $_POST['num'];
		
		print "Numbers in an array is ";
		foreach($number as  $value){
			print "$value"." ";
		}
		
		print "<br>";
		print "Repeated numbers in an array is ";
		
		$len = count($number);
		for($i = 0;$i< $len;$i++){
			for($j = $i + 1; $j < $len; $j++){
				
				if($number[$i] == $number[$j]){
					$temp = $number[$j];
					$number[$j] = $number[$i];
					$number[$i] = $temp;
					print "$number[$i]"." ";
					
				}
			}
		}	
		
		
				if($number[$i] == $number[$j]){
					print "$number[$i]"." ";
				}
				else{
					print "No numbers are repeated";
				}
		
	?>