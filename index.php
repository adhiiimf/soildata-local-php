<?php
// Create database connection using config file
include_once("config.php");
 
// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM datalogs ORDER BY id DESC");
?>
 
<html>
<head>    
    <title>Data Logs Soil Monitoring Haruman</title>
</head>
 
<body>
 
    <table width='90%' border=2>
 
    <tr>
        <th>Time</th> <th>Sampling</th> <th>Them Device 1</th> <th>RH Device 1</th>
        <th>Them Device 2</th> <th>RH Device 2</th>
        <th>Them Device 3</th> <th>RH Device 3</th>
        <th>Them Device 4</th> <th>RH Device 4</th>
        <th>Them Device 5</th> <th>RH Device 5</th>
        <th>Them Device 6</th> <th>RH Device 6</th>
        <th>Them Device 7</th> <th>RH Device 7</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['time']."</td>";
        echo "<td>".$user_data['sampling']."</td>";
        echo "<td>".$user_data['them_1']."</td>"; 
        echo "<td>".$user_data['rh_1']."</td>";
        echo "<td>".$user_data['them_2']."</td>"; 
        echo "<td>".$user_data['rh_2']."</td>";
        echo "<td>".$user_data['them_3']."</td>"; 
        echo "<td>".$user_data['rh_3']."</td>";
        echo "<td>".$user_data['them_4']."</td>"; 
        echo "<td>".$user_data['rh_4']."</td>";
        echo "<td>".$user_data['them_5']."</td>"; 
        echo "<td>".$user_data['rh_5']."</td>";
        echo "<td>".$user_data['them_6']."</td>"; 
        echo "<td>".$user_data['rh_6']."</td>";
        echo "<td>".$user_data['them_7']."</td>"; 
        echo "<td>".$user_data['rh_7']."</td>";     
    }
    ?>
    </table>
</body>
</html>