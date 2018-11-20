<?php
//dressage

	if($_POST['disc'] == 'DG' || $_POST['disc'] == 'WD'){
if(preg_match('/Introductory/',$className2) && !preg_match('/Western Dressage/',$className2)){
		switch($c){
		case 0; $add = ' Test A'; break;
		case 1; $add = ' Test B'; break;
		default: $add = ' Test C';
		}
		}else{
		switch($c){
		case 0; $add = ' Test 1'; break;
		case 1; $add = ' Test 2'; break;
		case 2: $add = ' Test 3'; break;
		default: $add = ' Test 4';
		}
		}
		}
		//eventing
		elseif ($_POST['disc'] == 'EV') {
		   switch($c){
		case 0; $add = ' Dressage'; break;
		case 1; $add = ' Cross Country'; break;
		default: $add = ' Show Jumping';
		}
		}elseif($_POST['disc'] == 'HU'){
		switch($c){
		case 0; $add = ' Over Fences I'; break;
		case 1; $add = ' Over Fences II'; break;
		default: $add = ' Under Saddle';
		}
	
		}
		elseif($_POST['disc'] == 'WE'){
		if(preg_match('/Junior Trial/',$className2)){
		switch($c){
		case 0; $add = ' In-Hand'; break;
		case 1; $add = ' Dressage'; break;
		default: $add = ' Ease of Handleing';
		}}elseif(preg_match('/Team/',$className2)){
		switch($c){
		case 0; $add = ' Dressage'; break;
		case 1; $add = ' Ease of Handeling'; break;
		case 2: $add = ' Speed'; break;
		default: $add = ' Cattle';
		}}else{
		switch($c){
		case 0; $add = ' Dressage'; break;
		case 1; $add = ' Ease of Handeling'; break;
		default: $add = ' Speed';
		}
		}
		}
		elseif($_POST['disc'] == 'JP'){
		switch($c){
		case 0; $add = ''; break;
		case 1; $add = ' Accumulator'; break;
		default: $add = ' Speed Round';
		}
		}
		?>