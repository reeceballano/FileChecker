<?php
class Filereader {
	public function reader($folder) {
		$file = glob($folder . '*.*');
		$iArray = array();
		foreach($file as $files) {
			//extension
			$extension = self::endArray(self::explodeArray('.', $files));
			
			//filename
			$filename = self::explodeArray('/', $files);
			
			//combine filenam and extension
			$result = $filename[1] . " | " . $extension;
			array_push($iArray, $result);
		}
		return $iArray;
	}
	
	public function explodeArray($delimiter, $iArray) {
		$iArray = explode($delimiter, $iArray);
		return $iArray;
	}
	
	public function endArray($iArray) {
		$i = end($iArray);
		return $i;
	}
	
	public function fileName($file) {
		switch ($file) {
			case 'php':
				return 'PHP FILE';
				break;
			
			case 'txt':
				return 'TEXT FILE';
				break;
			default:
				return 'UNKNOWN FILENAME';
		}
	}
}
?>