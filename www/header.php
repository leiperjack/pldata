<!DOCTYPE html>
<head>
<html>
<?php $id = $_GET['id'];
?>
<title>Premier League Database</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="http://www.logospng.com/images/138/premier-league-138624.png">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Sawarabi+Gothic" rel="stylesheet">

x


<div class="w3-bar w3-topbar w3-bottombar" >
  <a href="https://www.premierleague.com/" class="w3-bar-item w3-button"style="background-color:black"><img src="http://www.logospng.com/images/175/sportsnet-world-now-has-a-new-home-on-now-175832.png"alt="EPL Logo" style="height:58px;margin-top:-4px"></a>
  <a href="index.php" class="w3-bar-item w3-button w3-hover-lime" style="margin:auto">Clubs</a>
  <a href="playersearch.php" class="w3-bar-item w3-button w3-hover-lime">Players</a>
  <a href="#" class="w3-bar-item w3-button w3-hover-lime">Stats</a>
  <img class= "moveimage" src="http://www.cliffordfrench.co.uk/wp-content/uploads/2015/06/logo-premier-league-white.png"style="height:48px" align="right">
</div>

</head>
<?php echo $id; ?>

<body <?php echo "class='tester".$id."'>"; ?>




