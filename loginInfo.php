<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head></head>    


<body>
    <?php 
            
            
            $username = $_POST['email'];
            $password = $_POST['password'];
          

            $actualusr = "fraternitas07@gmail.com";
            $actualpass = "1234";

            if($username===$actualusr && $password===$actualpass)
                {
                   
                  // include 'blogentry.html';
                  echo '<script> window.location.href = "blogentry.html";</script>';
                }
            else {
                echo '<script>window.alert("you have entered incorrect details");   window.location.href= "login.html";</script>';
               
            }    
            
            
            
            
            
    ?>

        </body>
</html>
