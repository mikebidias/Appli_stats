<?php


$host = 'localhost';
$dbname = 'id20149174_csv_db';
$username = 'id20149174_mikeambassa';
    $password = '@1/wUo9-dMn>EH{1';
 
  try {
  
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        
  } catch (PDOException $e) {
  
    die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());
    
  }


  $name = htmlspecialchars($_POST["name"]);
  $country = htmlspecialchars($_POST["country"]);
  $club = htmlspecialchars($_POST["club"]);
  $age1= htmlspecialchars($_POST["age1"]);
  $age2 = htmlspecialchars($_POST["age2"]);
  $poste = htmlspecialchars($_POST["poste"]);
  $overall1 = htmlspecialchars($_POST["overall1"]);
  $overall2 = htmlspecialchars($_POST["overall2"]);
  $potential1= htmlspecialchars($_POST["potential1"]);
  $potential2 = htmlspecialchars($_POST["potential2"]);


$requete = $conn->prepare("SELECT `Name`, Age, Country, Club, Jersey_Number, Position, Overall, Potential FROM `tbl_name` WHERE `Name` LIKE '%$name%' OR `Country` LIKE '%$country%' OR `Age` BETWEEN $age1 AND $age2 OR `Overall` BETWEEN $overall1 AND $overall2 OR `Potential` BETWEEN $potential1 AND $potential2 OR `Club` LIKE '%$club%' OR `Position` LIKE '$poste'");
$requete->execute();


echo("<table width='500' border='1' cellspacing='0' cellpadding='5'>");
echo("<tr>");
echo("<td><strong>Players</strong></td>");
echo("<td><strong>Age</strong></td>");
echo("<td><strong>Country</strong></td>");
echo("<td><strong>Club</strong></td>");
echo("<td><strong>Jersey Number</strong></td>");
echo("<td><strong>Position</strong></td>");
echo("<td><strong>Overall rating</strong></td>");
echo("<tdC<strong>Potential</strong></td>");

echo("</tr>");



//$requete->prepare();
//$requete->execute();

while($players = $requete->fetch() ){
//mysql_free_result($requete);

echo("<tr>");
echo("<td>".$players['Name']."</td>");
echo("<td>".$players['Age']."</td>");
echo("<td>".$players['Country']."</td>");
echo("<td>".$players['Club']."</td>");
echo("<td>".$players['Jersey_Number']."</td>");
echo("<td>".$players['Position']."</td>");
echo("<td>".$players['Overall']."</td>");
echo("<td>".$players['Potential']."</td>");


}
echo("</tr>");
echo("</table>");


?>