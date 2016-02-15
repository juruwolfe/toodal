<!doctype php>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="author" href="humans.txt">
    </head>
    <body>
        
        <?php
    $servername = "localhost";
    $username = "juruwolf_jwolfe";
    $password = "Geffrey1!";
    $dbname = "juruwolf_toodal";

    $order = $_GET['order'];
    $task = $_GET['task'];
    $points = $_GET['points'];
    $status = $_GET['status'];
    $type_id = $_GET['type_id'];
    $type_char = $_GET['type_char'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 

    $sql = "INSERT INTO `list`(`order`, `task`, `points`, `status`, `type_char`,`type_id`) VALUES (".$order.", '".$task."', ".$points.",".$status.", '".$type_char. "'," .$type_id.")";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
?> 
    </body>
</html>
