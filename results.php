
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>DjaLo Stat - Results</title>
<!-- 

Highway Template

https://templatemo.com/tm-520-highway

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.jpg">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/light-box.css">
        <link rel="stylesheet" href="css/templatemo-style.css">
        <link rel="stylesheet" href="css/tablehoraires.css">

        <link href="https://fonts.googleapis.com/css?family=Kanit:100,200,300,400,500,600,700,800,900" rel="stylesheet">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>

<body>          
        
  <nav>
    <div class="logo">
        <a href="index.html">DjaLo<em>Stats</em></a>
    </div>
    <div class="menu-icon">
    <span></span>
  </div>
</nav>

<footer>
    <div class="container-fluid">
        <div class="col-md-12">
            
        </div>
    </div>
</footer>
    <h1 align="center"> Results </h1>


    <?php
    $host = 'localhost';
    $dbname = 'csv_db';
    $username = 'root';
    $password = '';
 
  try {
  
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        
  } catch (PDOException $e) {
  
    die("Impossible de se connecter à la base de données $dbname :" . $e->getMessage());
    
  }


  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    

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

               
    $requete = "SELECT distinct `Name`, Age, Country, Club, Jersey_Number, Position, Overall, Potential FROM `tbl_name` WHERE `Name` LIKE '%$name%' AND `Country` LIKE '%$country%' AND `Age` BETWEEN $age1 AND $age2 AND `Overall` BETWEEN $overall1 AND $overall2 AND `Potential` BETWEEN $potential1 AND $potential2 AND `Club` LIKE '%$club%' AND `Position` LIKE '$poste'";
    
    
    }
    
  




?>








    <section class="overlay-menu">
      <div class="container">
        <div class="row">
          <div class="main-menu">
              <ul>
                  <li>
                      <a href="index.html">Home</a>
                  </li>
                  <li>
                      <a href="masonry.html">Search</a>
                  </li>
              </ul>
          </div>
        </div>
      </div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

    <script src="js/vendor/bootstrap.min.js"></script>
    
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
	


    
</body>
</html>


<?php while($players=mysql_fetch_array($requete) &&
$players=mysql_fetch_array($requete) ){
mysql_free_result($requete);


$stmt = $conn->prepare($requete);
$stmt->execute(array(
   
   ));
$nbreResult = $stmt->rowCount();
if( $nbreResult > 0 )
{
   while($row = $stmt->fetch()) 
   {
      echo $row['Name'].' '.$row['Age'].'<br />';
   }
} ?>
