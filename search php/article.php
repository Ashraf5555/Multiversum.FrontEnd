<?php 
    include 'header.php';
?>
<h1>Article php</h1>

<div class="articel-container">
    <?php 
        $title = mysqli_real_escape_string($conn, $_GET['title']);
        $date = mysqli_real_escape_string($conn, $_GET['date']);
        

        $sql = "SELECT * FROM '%persons%' WHERE firstname='$title' AND lastname='$date'";
        $result = mysqli_query($conn, $sql); 
        $queryResult = mysqli_num_rows($result);
        
        if ($queryResult > 0 ) {
            while ($row = mysqli_fetch_assoc($result)) { 
                echo "<div>
                <h3>".$row{'firstname'}."</h3>
                <p>".$row{'lastname'}."</p>
                <p>".$row{'email '}."</p>
                <p>".$row['password']."</p>
            </div>";
            }
        } else {
            ecoh "There are no results matching your search!";
        }    
    ?>
    </div>