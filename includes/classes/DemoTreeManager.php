<?php
/**************************************
     File Name: DemoTreeManager.php
     Begin:  Sunday, April, 12, 2009, 13:39 AM
     Author: Ozan Koroglu
 			 Ahmet Oguz Mermerkaya 	
     Email:  koroglu.ozan@gmail.com
     		 ahmetmermerkaya@hotmail.com
 ***************************************/ 

require_once('ITreeManager.php');

class DemoTreeManager implements ITreeManager
{	
 	public function insertElement($name, $ownerEl, $slave)
	{
 		$insertId = rand(0, 10000);				
		$out =  '({ "elementId":"'.$insertId.'", "elementName":"'.$name.'", "slave":"'.$slave.'"})';
		return $out;
 	}
 	 	
 	
	
 	public function getElementList($ownerEl, $pageName) {
 		$out = "<li class='text' id='14'><span>file-1</span></li><li class='text' id='15'>".
					"<span>file-2</span></li><li class='text' id='16'><span>file-3</span></li>";
		return $out; 		
 	}
 	
 
 	
 	public function updateElementName($name, $elementId) {
 		$out = '({"elementName":"'.$name.'", "elementId":"'.$elementId.'"})';		
		return $out;
 	} 	
 	
 
 
 	public function deleteElement($elementId, &$index = 0){
 		$out = SUCCESS;			
		return $out; 		
 	} 	
 
 
 
 	public function changeOrder($elementId, $destOwnerEl, $destPosition){
 		$out = SUCCESS;		
		return $out;  		
 	}	
}

?>