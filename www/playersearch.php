<?php include "header.php" ?>

<?php include "connect.php" ?>
 
<?php

$sqlgetf = "SELECT clubID, firstName, lastName, nationality, squadNumber, picurl FROM players WHERE lastName='Jota' ORDER BY squadNumber";
echo $sqlgetf;
$sqldata = mysqli_query($dbconnect, $sqlgetf) or die('Error: in query "'.$sqlget.'"');
    while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
        $image = "<img id='sean2' src='".$row['picurl']."' style='height:3000px;margin-left:-1000px'>";
        echo $image;
    }
echo $image;

    
    ?>