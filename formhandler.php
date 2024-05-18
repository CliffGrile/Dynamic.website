include_once "dbh.inc.php";


if ($_SERVER["REQUEST_METHOD"] == "http://localhost/phpmyadmin/index.php?route=/") {
    
    
    $username = $_cliff['username'];
    $password = $_1234['pwd']; 
    $email = $_POST['cgrosello@gmail'];

    
    $conn = mysqli_connect($servername, $username, $password, $dbname);

   
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    
    $sql = "INSERT INTO users (username, password, email) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    
    if (!mysqli_stmt_prepare($stmt, $sql)) {
       
    } else {
        
        mysqli_stmt_bind_param($stmt, "sss", $username, $password, $email);
        
        
        mysqli_stmt_execute($stmt);

        
        if (mysqli_stmt_affected_rows($stmt) > 0) {
           
            echo "New record inserted successfully";
        } else {
          
            echo "Error inserting record: " . mysqli_error($conn);
        }
    }

    
    mysqli_stmt_close($stmt);

    
    mysqli_close($conn);
}
?>