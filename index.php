<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="blog_screen.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
    
body {margin:0;}

.navbar {
  overflow: hidden;
  background: url(https://goo.gl/tvJ3UQ);
  position: fixed;
  top: 0;
  width: 100%;
  text-decoration-color: #ddd;
  
}

.navbar a {
  float: right;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}
.navbar p{
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 0px 14px;
  text-decoration: none;
  font-size: 20px;
}

.navbar a:hover {
  background: #ddd;
  color: black;
}
#footer {
  text-align: left;
  position: fixed;
  left: 5px;
  right: 10px;
  bottom: 0;
  width: 99%;
  background:url(https://goo.gl/tvJ3UQ);
  color: white;
  text-align: center;
  border-radius: 10px;
}
html { 
  background: url(https://goo.gl/AmFM6M) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used  to enable scrolling */
  color: #f2f2f2;
}

</style>
</head>
<body>

<div class="navbar">
  <p href="index.html">MABRUR HUSAN DIHYAT</p>
  <a href="login.html">Add Entry</a>
  
</div>

<div id="main_screen">
  <h1>BLOG</h1>
  <?php
     $server  =   "dbprojects.eecs.qmul.ac.uk"  ;
     $username   =   "mmhd3"  ;
     $password   =   "WQbkYjI34JGDv"  ;
     $database   =   "mmhd3"  ;


     $dbi = mysqli_connect($server,$username,$password,$database) or die("Connection is not successful");
     $query = "select * from blog order by time desc;";

     $result = mysqli_query($dbi,$query) or die("Error in getting the file");
     

     $count = 0;

     
     while($row = mysqli_fetch_array($result)){
         $count++;
         //$dat = substr($row['time'],0,10);
         //$time = substr($row['time'],11,strlen($row['time']));

         $daa = date_create($row['date']);
         $date = date_format($daa, "D,M jS, Y, g:i a");

        
         echo '<div class="blog_screen"/>';
         //echo"<p><small>Date : $dat Time :$time </small></p>";
         echo '<p><small>'.$date.' UTC </small></p>';
         
         echo '<p><span id="title">'.$row['title'].'</span></p>';
         echo '<p><span id="body">'.$row['body'].'</span></p>';
         echo '</div>';
         
     } 

     if($count ===0 ){
        header('Location: login.html');
     }
  ?>
   </div>
        <div id="right_side_field">
            
            <a href="http://www.instagram.com"> Follow us on Instagram </p>
            <a href="http://www.facebook.com"> Follow us on Facebook </a>
        </div> 
    </div>

    <div id="footer">
      <script type="text/javascript">
        document.write ('<p>Current time is: <span id="date-time">', new Date().toLocaleString(), '<\/span>.<\/p>')
          if (document.getElementById) onload = function () {
            setInterval ("document.getElementById ('date-time').firstChild.data = new Date().toLocaleString()", 50)
          }
      </script>
    </div>

</body>
</html>
