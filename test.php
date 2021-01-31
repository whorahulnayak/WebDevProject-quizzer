<?php 
session_start();
//website logs in only ig user us in session 
	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>
<?php 
    $highscore = 20;
    $cat1_score = $highscore;
     $_SESSION['user_name']  = 'rahul';
    $query = "select * users from user_name ='$user_name' limit 1";
    $query2 = "UPDATE users SET cat1_score = '$cat1_score' WHERE user_name = '$username'";
    mysqli_query($con, $query2);
?>
<!-- <?php 
            $query = 'SELECT id,user_name,(cat1_score + cat2_score + cat3_score ) AS tot_score FROM users ORDER BY tot_score ';
            $result = mysqli_query($con, $query);
            while($result->num_rows > 0)
            {
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["id"]. " - UserName: " . $row["user_name"]. " Total score: " . $row["tot_score"]. "<br>";
                  }
            }
        ?> -->
