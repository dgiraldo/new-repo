<?php
$zip_array = [28239 => 'Gulf Coast Self Storage',
			  6800 => 'Security Self Storage', 
			  189 => 'Security Self Storage', 
			  2581 => 'Security Self Storage', 
			  8135 => 'Security Self Storage',
			  10451 => 'Abby Self Storage',
			  7755 => 'Cypress Self Storage',
			  10325 => 'Security Self Storage',
			  2320 => 'Security Self Storage',
			  501 => 'Security Self Storage', 
			  10719 => 'Security Self Storage', 
			  10725 => 'Security Self Storage',
			  8485 => 'Security Self Storage', 
			  1341 => 'Security Self Storage'];
			  
if(array_key_exists($_REQUEST['zip'], $zip_array)){
	echo $zip_array[$_REQUEST['zip']];
}else{
	echo "Is not a valid zip";
	echo "nueva prueba para el branch 3";
}
?>