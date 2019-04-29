<html>
<head>
    
    <head>
       <style type="text/css">
       body
       {
           text-align:center;
           background:linear-gradient(to left,#bdc3c7,#2c3e50);
           font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
           font-size: 400%;
       }
       select{
             height:40px;
             width: 200px;
             font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
         }
         input[type=submit]
         {
             height:40px;
             width: 150px;
             border-radius: 5px;
         }
         label{
             color:white;
         }
      </style>
</head>
<body>
<label>Enter Subject    </label><br><br>
    <?php
include_once('connection.php');
$b = $_POST['branch'];//document.getElementById("branch").value;
$a = $_POST['semester'];//document.getElementById("semester").value;
$c = $_POST['section'];
if(isset($_POST['submit1']))
{
                  
                  if( ($a=="sem1"||$a=="sem2") && $b=="N/A")
                   {
                      $sub="sub_sem1";
                   }
                   else if($a=="sem3"&&$b=="CC")
                   {
                        $sub="sub_cc3";
                    } 
                   else if($a=="sem3"&&$b=="BDA")
                   {
                        $sub="sub_bda3";
                        
                   }
                   else if($a=="sem3"&&$b=="EC")
                   {
                        $sub="sub_ec3";
                        
                   }
                   else if($a=="sem4"&&$b=="CC")
                   {
                        $sub="sub_cc4";
                        
                   }
                   else if($a=="sem4"&&$b=="BDA")
                   {
                        $sub="sub_bda4";
                        
                   }
                   else if($a=="sem4"&&$b=="EC")
                   {
                        $sub="sub_ec4";
                        
                   }
                   else if($a=="sem5"&&$b=="CC")
                   {
                        $sub="sub_cc5";
                        
                   }
                   else if($a=="sem5"&&$b=="BDA")
                   {
                        $sub="sub_bda5";
                        
                   }
                   else if($a=="sem5"&&$b=="EC")
                   {
                        $sub="sub_ec5";
                        
                   }
                  setcookie("branch", $b);
                  setcookie("semester",$a);
                  setcookie("section",$c);
}
           
            $sql = "select $sub from subject";
            $chk = mysqli_query($con,$sql);
            echo "<form method='POST' action='attendence.php'>";
           echo "<select name='subject' id='subject'>"; 
            while($row = mysqli_fetch_array($chk))
            {
                $data=$row[0];
            echo  "<option value=\"$data\">". $row[0] ."</option>";
            }        
            echo "</select>";
            echo"<br><br>";
            echo "<input type='submit' value='Take Attendence' name='submit2'>";echo"<br><br>";
            //echo "</form>";
            //echo "<form method='POST' action='see.php'>";
            echo "<input type='submit'  value='See Attendence' name='submit3'>";
            echo "</form>";
            
?>
          <br><br><br>
         
</body>
</html>