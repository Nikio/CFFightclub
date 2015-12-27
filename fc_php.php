<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="fc_styles.css"-->
    <title> CrazyForces' StarCraft2 Fightclub </title>
  </head>
  <body>
    <script src="fc_scripts.js"></script>
    <h1> CrazyForces' StarCraft2 Fightclub</h1> 
  <section>
  <p>Hi, du befindest dich auf der Startseite des SC2 Fightclubs.<br> 
    Hier kannst du eine Partie anfordern, die Rankingliste einsehen und Replays von gespielten Partien eintragen. </p>
  </section>
    <p id="ackMsg">That's the spirit <?php echo  $_POST["userid"];?>! Your opponent is testuser.<br> Have fun and good luck!</p>
    
    <p>
    <?php
        $uid = $_POST["userid"];
      
        $servername = "localhost";
        //for now, change this!!!!
        $username = "root";
        
        //Create connection
        $conn = new mysqli($servername, $username);
        
        //Check connection
        if($conn->connect_error){
          die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully <br>";
        
        //Get the database
        $dbname = "cffightclub";
        $sql = "USE " . $dbname;
        if($conn->query($sql) === TRUE){
            echo "Database available <br>";
        }else{
            echo "Error from the query: " . $conn->error;
        }
        
        //Make a request for unmatched members
        $lowerQuery = "SELECT number, name, league FROM csvtest WHERE number > 2 AND matched = ' ' ORDER BY number LIMIT 6";
        //Add upperQuery to lower query
        //$upperQuery .= "SELECT name FROM " . $dbname . " WHERE number < 2 AND matched = ' ' ORDER BY number LIMIT 2";
        
        $result = $conn->query($lowerQuery);
        
        //TODO cases to cover:
        /*
         * 1. Wenn beide queries 2 records zurückgibt
         * 2. Wenn eine/beide query 1 record zurückgibt
         * 3. Wenn eine/beide query 0 records zurückgibt
         */
        
        if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            echo "number: " . $row["number"] . ", name: " . $row["name"] . ", League: " . $row["league"] . "<br>";
          }
        }else{
            echo "0 results";
        }
        $conn->close();
        
    ?>
    </p>
  </body>  
</html>
