
<?php

$nameofdb = 'Multiversum';
$dbusername = 'root';
$dbpassword = '';
// Connect to MySQL via PDO
try {
$dbh = new PDO("mysql:dbname=$nameofdb;host=localhost", $dbusername, $dbpassword);
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}

$var1 = str_replace(array('%','_'),'',$_POST['search']);
if (!$var1)
{
    exit('Invalid form value: '.$var1);
}


$query = "SELECT * FROM products WHERE EAN LIKE :search OR productName LIKE :search";
$stmt = $dbh->prepare($query);
$stmt->bindValue(':search', '%' . $var1 . '%', PDO::PARAM_INT);
$stmt->execute();

/* Fetch all of the remaining rows in the result set */
//print("Fetch all of the remaining rows in the result set:\n");


 $result = $stmt->fetchAll();

foreach( $result as $row ) {
    echo $row["productName"];
    echo $row["EAN"];
}




?>

</body>
</html>


<?php 
    include 'header.php';
    
?>
<h1>Search php</h1>
<div class="articel-container">
<?php 
    if(isset($_POST['submit-search'])) { 
        $search = mysqli_real_escape_string($conn, $_POST['search']);
      
        $sql = "SELECT * FROM '%persons%' WHERE firstname LIKE '%$search%' OR lastname LIKE '%$search%' OR email LIKE '%$search%' OR 'description' LIKE '%$search%'";
        $result = mysqli_query($conn, $sql); 
        $queryResult = mysqli_num_rows($result);
        
        echo "There are " . $queryResult . " result!". "<br>";
        if ($queryResult > 0 ) {
            while ($row = mysqli_fetch_assoc($result)) { 
                echo "<a href= 'article.php?title=".$row['firstname'] . "&date=".$row['lastname']."'><
                div class='article-box'> 
                <h3>".$row{'firstname'}."</h3>
                <p>".$row{'lastname'}."</p>
                <p>".$row{'email '}."</p>
                <p>".$row['description']."</p>
            </div</a>";
            }
        } else {
            echo "There are no results matching your search!";
        }    
    }

?>
</div>
