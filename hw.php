<html>
<header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</header>
<body>
 
<input type="submit" class="button" name="stop" value="stop" />
<input type="submit" class="button" name="status" value="status" />

</body>
<script>
$(document).ready(function(){
    $('.button').click(function(){
        var clickBtnValue = $(this).val();
console.log(clickBtnValue);
        var ajaxurl = 'ajax.php',
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
	    alert(response.message);
        
        });
    });
});
</script>
</html>



 
<?php
include 'dbconfig.php'; 
// Create connection
$conn =  connect();
 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name from app.responses;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo $row["name"];
  }
} else {
  echo "0 results";
}
close_connect($conn);
?>
