
<?php include "connect.php"; ?>
<div class="w3-main w3-content w3-padding w3-leftbar w3-rightbar w3-border-white" style="max-width:1200px;margin-top:-22px;">
<div class="w3-row-padding w3-padding-16 w3-center" style="margin-top:60px" id="teams">
<?php

$sqlget = "SELECT clubName, club_id, badgeurl FROM club";
$sqldata= mysqli_query($dbconnect, $sqlget);

$array = "<h1> Click on a club's crest to view players: </h1><p>";
while ($row = mysqli_fetch_array($sqldata)){
    $array .= "<div class='w3-quarter w3-display-container' style='margin-top:20px'>";
    $array .= "<a href= club.php?id=".$row['club_id'].">";
    $array .= "<img src ='".$row['badgeurl']."' style='max-height:140px;margin-top:20px;margin-bottom:10px;filter:drop-shadow(5px 6px 3px #000000)'>";
    $array .= "</div>";
	//echo print_r($row);

}
$array .= "</div>";

echo $array
?>
