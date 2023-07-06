<html>
<head>

</head>
<body>
<?php
//session_start();
//if ($_SESSION['email']) {
//    if (isset($_GET['id'])){
//        $id = $_GET['id'];
//        $email = $_SESSION['email'];
//        include 'inc/connectfiledb.php';
//        if ($db->connect_error) {
//            die("Connection failed: " . $db->connect_error);
//        }
//        $sql = "SELECT * FROM `$email` WHERE `id`='$id'";
//        $result = mysqli_query($db, $sql);
//         $row = mysqli_fetch_row($result);
//        while ($row = mysqli_fetch_row($result)) {
//            echo $row['name'];
//        }
//        echo $row['filety'];
//        $filety = $row['filety'];;
//        header("Content-type: $filety");
//        $name = $row['file'];;
//        header("Content-Disposition: attachment; filename=$name");
//        echo stripslashes($row);
//        readfile($result);
////        header();
//        header("location: dashboard.php");
//    }
//}
//else{
//    header("location: dashboard.php");
//}
//
//

//session_start();
//if ($_SESSION['email']) {
//    if (isset($_GET['id'])){
//        $id = $_GET['id'];
//        $email = $_SESSION['email'];
//        include 'inc/connectfiledb.php';
//        if ($db->connect_error) {
//            die("Connection failed: " . $db->connect_error);
//        }
//        $sql = "SELECT * FROM `$email` WHERE `id`='$id'";
//        $result = mysqli_query($db, $sql);
//        $row = mysqli_fetch_row($result);
//        while ($row = mysqli_fetch_row($result)) {
//            echo $row['name'];
//        }
//        echo $row['filety'];
//        $filety = $row['filety'];;
//        header("Content-type: $filety");
//        $name = $row['file'];;
//        header("Content-Disposition: attachment; filename=$name");
//        $filepath =  $row['file'];
//        if (file_exists($filepath)) {
//            readfile($filepath);
//        } else {
//            echo "File not found.";
//        }
//    }
//}
//else{
//    header("location: dashboard.php");
//}
//


//session_start();
//if ($_SESSION['email']) {
//    if (isset($_GET['id'])) {
//        $id = $_GET['id'];
//        $email = $_SESSION['email'];
//        include 'inc/connectfiledb.php';
//        if ($db->connect_error) {
//            die("Connection failed: " . $db->connect_error);
//        }
//        $sql = "SELECT * FROM `$email` WHERE `id`='$id'";
//        $result = mysqli_query($db, $sql);
//        if ($row = mysqli_fetch_assoc($result)) {
//            $filety = $row['filety'];
//            $name = $row['file'];
//            $filepath = $name;  // Assuming the file is located in the same directory as this PHP file
//
//            if (file_exists($filepath)) {
//                // Set appropriate headers for file download
//                header("Content-type: $filety");
//                header("Content-Disposition: attachment; filename=$name");
//
//                // Output the file
//                readfile($filepath);
//                exit; // It's recommended to exit after sending the file to prevent further processing of the page.
//            } else {
//                echo "File not found.";
//            }
//        } else {
//            // Handle case where the file with the specified id is not found
//        }
//    }
//} else {
//    header("location: dashboard.php");
//    exit; // It's recommended to exit after redirecting to prevent further processing of the page.
//}


session_start();
if ($_SESSION['email']) {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $email = $_SESSION['email'];
        include 'inc/connectfiledb.php';
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        }
        $sql = "SELECT * FROM `$email` WHERE `id`='$id'";
        $results = mysqli_query($db, $sql);
        if ($row = mysqli_fetch_assoc($results)) {
            $filety = $row['filety'];
            $name = $row['file'];
            $fileData = stripslashes($row['filedata']);

            header("Content-type: $filety");
            header("Content-Disposition: attachment; filename=$name");
            readfile($name);
            exit; // It's recommended to exit after sending the file to prevent further processing of the page.
        } else {
            // Handle case where the file with the specified id is not found
        }
    }
} else {
    header("location: dashboard.php");
    exit; // It's recommended to exit after redirecting to prevent further processing of the page.
}


?>
</body>
</html>