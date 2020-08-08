<html>
<title>CSE_IV</title>
</html>
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
        echo "<table border='1'>";
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