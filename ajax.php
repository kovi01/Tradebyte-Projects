<?php

include 'dbconfig.php'; 
$conn =  connect();
 
 
    if (isset($_POST['action'])) {
        switch ($_POST['action']) {
            case 'stop':
                stop();
                break;
            case 'status':
                status();
                break;
        }
    }
	function status() {
		$sql = "SELECT name from app.responses;";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
		  // output data of each row
		  while($row = $result->fetch_assoc()) {
			return "<div>alert('running');</div>";
		  }
		} else {
		  return "<div>alert('not running');</div>";
		}
      
        exit;
    }

    function stop() {
		$sql = "sudo killall mysqld";
		$result = $conn->query($sql);	 
         
        exit;
    }
?>