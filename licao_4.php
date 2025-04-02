<?php 
 	$num_1 = 8;
 	$num_2 = 2;
 	$num_3 = 6;

 	if ($num_1 < $num_2) {
 		if ($num_1 < $num_3) {
 			if ($num_2 < $num_3) {
 				echo ($num_1 . " <br/> " . $num_2 . " <br/> " . $num_3);
 			}
 			else{
 				echo ($num_1 . " <br/> " . $num_3 . " <br/> " . $num_2);
 			}
 		}
 		else {
 			echo ($num_3 . " <br/> " . $num_1 . " <br/> " . $num_2);
 		}
 	} 
 	else{
 		if ($num_2 < $num_3) {
 			if ($num_3 < $num_1) {
 				echo ($num_2 . " <br/> " . $num_3 . " <br/> " . $num_1);
 			}
 			else {
 				echo ($num_2 . " <br/> " . $num_1 . " <br/> " . $num_3);
 			}
 		}
 		else {
 			echo ($num_3 . " <br/> " . $num_2 . " <br/> " . $num_1);
 		}
 	}




 ?>