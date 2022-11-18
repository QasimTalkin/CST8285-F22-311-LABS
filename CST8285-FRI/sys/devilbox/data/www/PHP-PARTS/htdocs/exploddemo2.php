<?php
	
	$path= getcwd();
	echo $path. "<br>";
	if (file_exists("./data/file1.txt")){
		echo "true";
		echo "<br>";
	}
	else{
		echo "file not exist";
		echo "<br>";
	}

	#echo file_get_contents("./data/file1.txt");
	$file_content = file_get_contents("./data/file1.txt");
	$greetings = explode("\n", $file_content); // array
	#echo $greetings; // echo needs string - error
	print_r($greetings);
	foreach($greetings as $greeting){
		echo("<p>");
		$words = explode(" ", $greeting);

		print_r($greeting."<br>");
		foreach($words as $word){
			
			echo($word."<br>"); //writin to flile
			file_put_contents("newfile.txt", $word." ",FILE_APPEND);
		}
		echo("</p>");
		
	  }



	  
	  

?>
