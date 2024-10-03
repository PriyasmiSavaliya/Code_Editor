<?php
session_start();
$inputs = $_POST['inputs'];
// print_r($inputs);
//echo $_GET['language'];

@mkdir("program/" . $_SESSION['user']);

	$my=fopen("program/".$_SESSION['user']."/inputs.txt","w");
	fwrite($my,$inputs);
	if($_GET['language'] == "C")
	{
		$random = uniqid(); // Generate a unique identifier
    $name = 'program/' . $_SESSION['user'] . '/' . $random . '.c';

    // Save the user's C code to a file
    $myfile = fopen($name, "w");
    $txt = $_POST['code'];
    // Ensure proper handling of newline characters
    $txt = str_replace("\r", "", $txt); // Remove any carriage return characters
    fwrite($myfile, $txt);
    fclose($myfile);

    $outputExe = 'program/' . $random . ".exe";
    $compileCommand = "gcc $name -o $outputExe 2>&1";
    $compileOutput = shell_exec($compileCommand);

    if (empty($compileOutput)) {
        // Compilation successful, now execute the program
        $executionCommand = __DIR__ . "/$outputExe < program/".$_SESSION['user']."/inputs.txt";
        $programOutput = shell_exec($executionCommand);
        echo "$programOutput";
    } else {
        // Compilation error, display the error message
        echo "Compilation Error: <br>$compileOutput";
    }
	
		// $name = 'program/'.$_SESSION['user']."/".$_SESSION['user'].".c";
		// $myfile=fopen($name,"w");
		// $txt=$_POST['code'];
		// //echo $txt;
		// fwrite($myfile,$txt);
		// ob_start();
		// if($_GET['language']=='C')
		// {
		// exec("C:\\MinGW\\bin\\gcc " . $name . " 2>&1", $out);
		// }
		// $res=ob_get_contents();
		// ob_end_clean();
		// if(count($out)==0)
		// {
		// $t=shell_exec('./a.out < ' .'program/'. $_SESSION['user']."/inputs.txt");
		// echo $t;
		// }
		// else
		// {
		// for($i=0;$i<count($out);$i++)
		// {
		// 	echo $out[$i];
		// 	echo "<br>";
		// }
		// }
	}
	else if($_GET['language'] == "cpp")
	{
		$random = uniqid(); // Generate a unique identifier
    $name = 'program/' . $_SESSION['user'] . '/' . $random . '.c';

    // Save the user's C code to a file
    $myfile = fopen($name, "w");
    $txt = $_POST['code'];
    // Ensure proper handling of newline characters
    $txt = str_replace("\r", "", $txt); // Remove any carriage return characters
    fwrite($myfile, $txt);
    fclose($myfile);

    $outputExe = 'program/' . $random . ".exe";
    $compileCommand = "g++ $name -o $outputExe 2>&1";
    $compileOutput = shell_exec($compileCommand);

    if (empty($compileOutput)) {
        // Compilation successful, now execute the program
        $executionCommand = __DIR__ . "/$outputExe";
        $programOutput = shell_exec($executionCommand);
        echo "$programOutput";
    } else {
        // Compilation error, display the error message
        echo "Compilation Error: <br>$compileOutput";
    }
	
	}
	else if($_GET['language'] == "Java")
	{
chdir("program/" . $_SESSION['user']);
		$name = "Main.java";
		$myfile=fopen($name,"w");
		$txt=$_POST['code'];
		//echo $txt;
		fwrite($myfile,$txt);
		ob_start();
		if($_GET['language']=='Java')
		{
		exec("C:\\jdk1.8.0_351\\bin\\javac " . $name . " 2>&1", $out);
		}
		$res=ob_get_contents();
		ob_end_clean();
		if(count($out)==0)
		{
		$t=shell_exec('java Main < inputs.txt');
		echo $t;
		}
		else
		{
		for($i=0;$i<count($out);$i++)
		{
			echo $out[$i];
			echo "<br>";
		}
		}
	}
	else if($_GET['language'] == "Python")
	{
		$name ="program/". $_SESSION['user']."/".$_SESSION['user'].".py";
		$myfile=fopen($name,"w");
		$txt=$_POST['code'];
		//echo $txt;
		fwrite($myfile,$txt);
		ob_start();
		if($_GET['language']=='Python')
		{
		exec("C:\\Users\\01\\AppData\\Local\\Programs\\Python\\Python312\\python.exe " . $name . " 2>&1" . ' < ' .'program/'. $_SESSION['user']."/". "inputs.txt", $out);
		}
		$res=ob_get_contents();
		ob_end_clean();
		if(count($out)==0)
		{
		echo 'python ' . $name . ' < ' . 'program/' .$_SESSION['user']."/". "inputs.txt";
		$t=shell_exec('python ' . $name . ' < ' .'program/' . $_SESSION['user']."/". "inputs.txt");
		echo $t;
		}
		else
		{
		for($i=0;$i<count($out);$i++)
		{
			echo $out[$i];
			echo "<br>";
		}
		}
	} else if ($_GET['language'] == "PHP") {
		// Add your PHP code execution logic here
		$name = "program/" . $_SESSION['user'] . "/" . $_SESSION['user'] . ".php";
		$myfile = fopen($name, "w");
		$txt = $_POST['code'];
		fwrite($myfile, $txt);
		ob_start();
		if ($_GET['language'] == 'PHP') {  // Corrected case sensitivity
			exec("C:\\xampp\\php\\php.exe " . $name . " 2>&1" . ' < ' . 'program/' . $_SESSION['user'] . "/" . "inputs.txt", $out);
		}
		$res = ob_get_contents();
		ob_end_clean();
		if (count($out) == 0) {
			echo 'php ' . $name . ' < ' . 'program/' . $_SESSION['user'] . "/" . "inputs.txt";
			$t = shell_exec('php ' . $name . ' < ' . 'program/' . $_SESSION['user'] . "/" . "inputs.txt");
			echo $t;
		} else {
			for ($i = 0; $i < count($out); $i++) {
				echo $out[$i];
				echo "<br>";
			}
		}
	}
	
		else
		{
			echo "Invalid Language";
		}
?>
