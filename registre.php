<html>
<head>
<title>Wifi Vilafranca</title>
</head>
<body>


<?php
error_reporting(E_ERROR | E_PARSE);
$host = "localhost";
$dbusername = "root";
$dbpassword = "infom";
$dbname = "wifi-vilafranca";

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {	
	if (empty($_POST["nom"])) {
    	$nomErr = " *Es requereix el nom";
   		mysqli_close($conn);
  }else {
  	$nom = test_input($_POST["nom"]);
  	 if (!preg_match("/^[a-zA-Z ]*$/",$nom)) {
     	 $nomErr = "*Nomès està permes lletres i espais"; 
      	 mysqli_close($conn);
    }else{

    }
}
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["email"])) {
		$emailErr = " *Es requereix el correu electrònic";
		mysqli_close($conn);
	}else{
		$email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$emailErr = " *El format del correu electrònic no és correcte";
			mysqli_close($conn);
		}else{

		}
	}
	
}




if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
  $sql = "INSERT INTO usuaris (nom, email)
  values ('$nom','$email')";
  if (mysqli_query($conn,$sql)){
    
  }
  else{

  }
  $conn->close();
}









?>
<h4>Registrat i obte el codi</h4>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <p>Nom: <input type="text" name="nom"/></p>
 <span class="error"> <?php echo $nomErr;?></span>
 <p>Correu electronic: <input type="text" name="email" /></p>
  <span class="error"> <?php echo $emailErr;?></span>
 <p><input type="submit" /></p>
</form>













</body>
</html>
