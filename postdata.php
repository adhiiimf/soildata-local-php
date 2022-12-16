<?php
    //Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "DBNAME";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }

    //Get current date and time
    date_default_timezone_set('Asia/Jakarta');
    $date = date("d-m-Y");
    $time = date("H:i:s");
    $apikey = $_POST['apikey'];
    $apikeyvalue = "APIKEY";

    if($apikey==$apikeyvalue)
    {
    	$sampling = $_POST['sampling'];
        $them_1 = $_POST['them_1'];
    	$rh_1 = $_POST['rh_1'];
        $them_2 = $_POST['them_2'];
    	$rh_2 = $_POST['rh_2'];
        $them_3 = $_POST['them_3'];
    	$rh_3 = $_POST['rh_3'];
        $them_4 = $_POST['them_4'];
    	$rh_4 = $_POST['rh_4'];
        $them_5 = $_POST['them_5'];
    	$rh_5 = $_POST['rh_5'];
        $them_6 = $_POST['them_6'];
    	$rh_6 = $_POST['rh_6'];
        $them_7 = $_POST['them_7'];
    	$rh_7 = $_POST['rh_7'];

	    $sql = "INSERT INTO datalogs (`date`, `time`, `sampling`, `them_1`, `rh_1`, `them_2`, `rh_2`, `them_3`, `rh_3`, `them_4`, `rh_4`, `them_5`, `rh_5`, `them_6`, `rh_6`, `them_7`, `rh_7`)
		
		VALUES (now(), current_timestamp(),'".$sampling."', '".$them_1."', '".$rh_1."', '".$them_2."', '".$rh_2."', '".$them_3."', '".$rh_3."', '".$them_4."', '".$rh_4."', '".$them_5."', '".$rh_5."', '".$them_6."', '".$rh_6."', '".$them_7."', '".$rh_7."')";

		if ($conn->query($sql) === TRUE) {
		    echo "OK, data success post to database";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}else echo "Error";

	$conn->close();
?>