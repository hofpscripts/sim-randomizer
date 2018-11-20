<?php
shuffle($classEntries);
		
echo "[b]" .stripslashes($className). "[/b]" .$entries. "\n";
		   $place = 1; // Start the place counter.
		   for($i=0;$i < $numEntries; $i++) {
        $entry = $classEntries[$i];
if($tenonly == TRUE){
        if($place <= 10){
echo $place.placeExt($place).". ". trim($entry);
echo "\n";}}
else{
echo $place.placeExt($place).". ". trim($entry);
echo "\n";}
//echo "\n";
					
		$place++;
		}//end class
		echo "\n";
		?>