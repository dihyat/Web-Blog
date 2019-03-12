
<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>    
<body>
    <?php
     ini_set('display_errors',1);
     ini_set('display_startup_errors',1);
     error_reporting(E_ALL);
        $title = $_POST['title'];
        $entry = $_POST['entry'];

        $server  =   "dbprojects.eecs.qmul.ac.uk"  ;
        $username   =   "mmhd3"  ;
        $password   =   "WQbkYjI34JGDv"  ;
        $database   =   "mmhd3"  ;
        $port = "3306";
        //$time =  date("Y-m-d h:i:s");

        $dbi = mysqli_connect($server,$username,$password,$database);
        $query = "INSERT into blog(title,body) VALUES ('$title','$entry')";

        $result = mysqli_query($dbi,$query);

       
    
       
    
    ?>
   
</body>
</html>