<?php	
	function itemsReadFile(&$arr){
		$file = __DIR__ . "/../data/products.csv";
		
		if (!file_exists($file)) {
			die("We don't have data file");
		}
		if(($fp = fopen($file, 'r+')) === false) {
			die("Error while opening file");
		}
		$i = 0;
		while (($data = fgetcsv($fp, 1000, ';')) !== false) {
			if ($i > 0) {
				$arr[$data[0]] = $data;
			}
			$i++;
		}
		fclose($fp);
	}
	
	function itemsWriteFile($arr, $file){
		fclose(fopen($file, "a+b"));
		$f = fopen($file, "r+b") or die("Файл недоступен для записи");
		flock($f, LOCK_EX);
		ftruncate($f, 0);
		fseek($f, 0, SEEK_SET);
		fwrite($f, "id;title;description;price;foto" . "\r\n");
		for($i=1; $i<=count($arr); $i++){ 
			$str = '';
			foreach($arr[$i] as $key => $val){
				$str .= $val . ";";
			}
			fwrite($f, $str . "\r\n"); 
		} 
		fclose($f);
		return true;
		
	} 
?>