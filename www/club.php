<?php include "header.php"; ?>
<?php include "connect.php"; ?>
<?php
$id = $_GET['id'];  
?>
<div class = 'w3-main w3-margin'>
<?php

###FORWARDS###
#<img src='http://www.sciencekids.co.nz/images/pictures/flags680/".(str_replace(' ', '_', ($row['nationality']))).".jpg'style
$players = "<div class = 'w3-container w3-twothird'>";

$sqlget = "SELECT clubID, firstName, lastName, nationality, squadNumber, picurl FROM players WHERE clubID='$id' AND position='Forward' ORDER BY squadNumber";

$sqldata = mysqli_query($dbconnect, $sqlget) or die('Error: in query "'.$sqlget.'"');
    while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)) {
        
        $players .= "<div class='w3-container w3-third'style='margin-top:50px'>";
        $players .= "<div class='w3-container w3-quarter w3-margins'>";
        $players .= "<img src ='https:".$row['picurl']."' style='width:100px'>";
        $players .= "</div>"; 
        $players .= "<div class='w3-container w3-half' style='text-align:right'>";
        $players .= "<h2>".$row['firstName']." ".$row['lastName']."</h2>"; 
        $players .= "</div></div>"; 

    
        
    
};
$players .= "<div class = 'w3-container w3-third w3-grey'></div>";
echo $players;





?>
</div>


