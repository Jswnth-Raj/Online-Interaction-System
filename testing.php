<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Branches</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
  
</head>
<body>
  <nav class="red darken-4" role="navigation">
    <div class="nav-wrapper">
      <a href="https://www.giits.in/" class="brand-logo"><img src="gonna_logo.png" alt=""style="border-square:60px"width="110" height="110"></a>
	  <a href="https://www.giits.in/"class="brand-logo center white-text">Gonna Institute of Information Technology & Sciences</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="#" class="white-text">Home</a></li>
        <li><a href="#developers"class="white-text">About Developers</a></li>
		<li><a href="#contact	"class="white-text">Contact Us</a></li>
	  </ul>
    </div>
  </nav>
  <div>
  <p>
    <br/>
  </p>
  </div>
 <div class="bordered">
<?php
/* Attempt MySQL server connection. */
$link = mysqli_connect("localhost", "root", "", "feedback");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql = "SELECT * FROM cse";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        
		echo "<table style='border'>";
		
            echo "<tr>";
                echo "<th>Register_number</th>";
                echo "<th>Name</th>";
                echo "<th>CNS</th>";
                echo "<th>CNS_Review</th>";
				echo "<th>STM</th>";
                echo "<th>STM_Review</th>";
				echo "<th>SPM</th>";
                echo "<th>SPM_Review</th>";
				echo "<th>MC</th>";
                echo "<th>MC_Review</th>";
				echo "<th>UML</th>";
                echo "<th>UML_Review</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['regno'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['cns'] . "</td>";
                echo "<td>" . $row['cns_review'] . "</td>";
				echo "<td>" . $row['stm'] . "</td>";
                echo "<td>" . $row['stm_review'] . "</td>";
				echo "<td>" . $row['spm'] . "</td>";
                echo "<td>" . $row['spm_review'] . "</td>";
				echo "<td>" . $row['mc'] . "</td>";
                echo "<td>" . $row['mc_review'] . "</td>";
				echo "<td>" . $row['uml'] . "</td>";
                echo "<td>" . $row['uml_review'] . "</td>";
            
			echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
   } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
</div>
  <footer class="page-footer red darken-4" id="developers">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Developers</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>

        </div>
			<div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12" id="contact">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>

