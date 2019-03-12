<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>    
<body>
    <?php
     ini_set('display_errors',1);
     ini_set('display_startup_errors',1);
     error_reporting(E_ALL);
        $title = $_POST['title'];
        $entry = $_POST['body'];

        $server  =   "dbprojects.eecs.qmul.ac.uk"  ;
        $username   =   "mmhd3"  ;
        $password   =   "WQbkYjI34JGDv"  ;
        $database   =   "mmhd3"  ;
        $port = "3306";
        $time =  date("Y-m-d h:i:s");

        $dbi = mysqli_connect($server,$username,$password,$database) or die("Connection is not successful");
        $query = "INSERT into blog(title,body,time) VALUES ('$title','$entry','$time')";

        $result = mysqli_query($dbi,$query) or die("Error in inserting the file");
        mysqli_close($dbi);

        header('Location: index.php');
       
    
    ?>
   
</body>
</html>