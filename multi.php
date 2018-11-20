<?php
for($c=0;$c<$num;$c++){
shuffle($classEntries);
if($num > 0){
if(!empty($_POST['disc'])){
include 'classnames.php';
}
else {
    $add = ' Round ' .$c+1;
}
$classNamenew= $className2.$add;
		}else{
		$classNamenew= $className2;
		}
echo "[b]" .stripslashes($classNamenew). "[/b]" .$entries. "\n";
		   $place = 1; // Start the place counter.
		  
        for($i=0;$i < $numEntries; $i++) {
        $entry = $classEntries[$i];
        //$data = explode(",", $entry);
        if($tenonly == TRUE){
        if($place <= 10){
echo $place.placeExt($place).". ". trim($entry);
echo "\n";}}
else{
echo $place.placeExt($place).". ". trim($entry);
echo "\n";}
					
		$place++;
		}//end class
		echo "\n";
		}
		?>