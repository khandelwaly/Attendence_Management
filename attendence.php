<html>
<head>
<style type="text/css">
body
{
  text-align: center;
 
}
#table1
 {
    border: 1px solid black;
    border-collapse: collapse;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;


}
#table2
{
    border: 1px solid black;
    border-collapse: collapse;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
th 
{
    padding: 15px;
    text-align: center;
    background-color: #4CAF50;
    color: white;
}
td 
{
    padding: 15px;
    text-align: center;
}
tr:nth-child(even) {background-color: #f2f2f2;}
input[type=checkbox]
{
    width: 20px; 
   height: 20px; 
}
input[type=submit]
{
    height:40px;
    width: 150px;
    border-radius: 5px;
}
h3
{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}
</style>
</head>
<body>
<?php
/******************************************PHP FOR PRINTING TABLE********************************************/
include_once('connection.php');

if(isset($_POST['submit2']))
{
    $subject = $_POST["subject"];
    $branch = $_COOKIE["branch"];
    $semester =$_COOKIE["semester"];
    $section =$_COOKIE["section"];
    //echo "$section";
    //echo "$semester";
       /*********************SEMESTER 1**********************************/
     if($semester=="sem1" && $section=='A')
     {
         //if($section="A")
         //{
             $total_table="total_sem1a";
             $master_table="sem1a";
             if($subject=="Physics")
             {
              $table="physics_sem1a";
              $total_column="physics";
             }
             else if($subject=="Chemistry")
             {
              $table="chemistry_sem1a";
              $total_column="chemistry";
             }
             else if($subject=="Math")
             {
              $table="math_sem1a";
              $total_column="math";
             }
             else if($subject=="C Programming")
             {
              $table="c_programming_sem1a";
              $total_column="c_programming";
             }
      }// }

         if($semester=="sem1"&& $section=="B")
         {
             $total_table="total_sem1b";
             $master_table="sem1b";
             if($subject=="Physics")
             {
              $table="physics_sem1b";
              $total_column="physics";
             }
             else if($subject=="Chemistry")
             {
              $table="chemistry_sem1b";
              $total_column="chemistry";
             }
             else if($subject=="Math")
             {
              $table="math_sem1b";
              $total_column="math";
             }
             else if($subject=="C Programming")
             {
              $table="c_programming_sem1b";
              $total_column="c_programming";
             }
         }
     //}
      /*********************SEMESTER 2**********************************/
      if($semester=="sem2"&& $section=='A')
     {
         //if($section="A")
         //{
             $total_table="total_sem2a";
             $master_table="sem2a";
             if($subject=="Physics")
             {
              $table="physics_sem2a";
              $total_column="physics";
             }
             else if($subject=="Chemistry")
             {
              $table="chemistry_sem2a";
              $total_column="chemistry";
             }
             else if($subject=="Math")
             {
              $table="math_sem2a";
              $total_column="math";
             }
             else if($subject=="C Programming")
             {
              $table="c_programming_sem2a";
              $total_column="c_programming";
             }
         }

         if($semester=="sem2"&&$section=="B")
         {
             $total_table="total_sem2b";
             $master_table="sem2b";
             if($subject=="Physics")
             {
              $table="physics_sem2b";
              $total_column="physics";
             }
             else if($subject=="Chemistry")
             {
              $table="chemistry_sem2b";
              $total_column="chemistry";
             }
             else if($subject=="Math")
             {
              $table="math_sem2b";
              $total_column="math";
             }
             else if($subject=="C Programming")
             {
              $table="c_programming_sem2b";
              $total_column="c_programming";
             }
         }
     
     /*********************SEMESTER 3**********************************/
     if($semester=="sem3"&&$branch=="CC")
     {
         //if($branch=="CC")
         //{
             $total_table="total_cc3";
             $master_table="cc3";
             if($subject=="Discrete")
             {
                 $table="discrete_cc3";
                 $total_column="discrete";
             }
             else if($subject=="Logic")
             {
                 $table="logic_cc3";
                 $total_column="logic";
             }
             else if($subject=="Data Structure")
             {
                 $table="ds_cc3";
                 $total_column="ds";
             }
         }
         if($semester=="sem3"&&$branch=="BDA")
         {
             $total_table="total_bda3";
             $master_table="bda3";
             if($subject=="Discrete")
             {
                 $table="discrete_bda3";
                 $total_column="discrete";
             }
             else if($subject=="Logic")
             {
                 $table="logic_bda3";
                 $total_column="logic";
             }
             else if($subject=="Data Structure")
             {
                 $table="ds_bda3";
                 $total_column="ds";
             }
        }
        if($semester=="sem3"&&$branch=="EC")
        {
            $total_table="total_ec3";
            $master_table="ec3"; 
            if($subject=="Math")
            {
                $table="math_ec3";
                $total_column="math";
            }
            else if($subject=="EDC")
            {
                $table="edc_ec3";
                $total_column="edc";
            }
            else if($subject=="Signal System")
            {
                $table="signal_sys_ec3";
                $total_column="signal_sys";
            }
        }
     

     /*********************SEMESTER 4**********************************/
     else if($semester=="sem4")
     {
         if($branch=="CC")
         {
             $total_table="total_cc4";
             $master_table="cc4";
             if($subject=="CBNST")
             {
                 $table="cbnst_cc4";
                 $total_column="cbnst";
             }
             else if($subject=="JAVA")
             {
                 $table="java_cc4";
                 $total_column="java";
             }
             else if($subject=="CC")
             {
                 $table="cc_cc4";
                 $total_column="cc";
             }
         }
         else if($branch=="BDA")
         {
             $total_table="total_bda4";
             $master_table="bda4";
             if($subject=="CBNST")
             {
                 $table="cbnst_bda4";
                 $total_column="cbnst";
             }
             else if($subject=="JAVA")
             {
                 $table="java_bda4";
                 $total_column="java";
             }
             else if($subject=="R Programming")
             {
                 $table="r_programming_bda4";
                 $total_column="r_programming";
             }
        }
        else if($branch=="EC")
        {
            $total_table="total_ec4";
            $master_table="ec4";   
            if($subject=="AIC")
            {
                $table="aic_ec4";
                $total_column="aic";
            }
            else if($subject=="Data Structure")
            {
                $table="ds_ec4";
                $total_column="ds";
            }
            else if($subject=="EMFT")
            {
                $table="emft_ec4";
                $total_column="emft";
            }
        }
     }

     /*********************SEMESTER 5**********************************/
     else if($semester=="sem5")
     {
         if($branch=="CC")
         {
             $total_table="total_cc5";
             $master_table="cc5";
             if($subject=="DAA")
             {
                 $table="daa_cc5";
                 $total_column="daa";
             }
             else if($subject=="OS")
             {
                 $table="os_cc5";
                 $total_column="os";
             }
             else if($subject=="DBMS")
             {
                 $table="dbms_cc5";
                 $total_column="dbms";
             }
         }
         else if($branch=="BDA")
         {
             $total_table="total_bda5";
             $master_table="bda5";
             if($subject=="DAA")
             {
                 $table="daa_bda5";
                 $total_column="daa";
             }
             else if($subject=="OS")
             {
                 $table="os_bda5";
                 $total_column="os";
             }
             else if($subject=="DBMS")
             {
                 $table="dbms_bda5";
                 $total_column="dbms";
             }
        }
        else if($branch=="EC")
        {
            $total_table="total_ec5";
            $master_table="ec5";
            if($subject=="MICRO CONTROLLER")
            {
                $table="micro_controller_ec5";
                $total_column="micro_controller";
            }
            else if($subject=="DIGITAL COMMUNICATION")
            {
                $table="digicomm_ec5";
                $total_column="digicomm";
            }
            else if($subject=="ANTENNA")
            {
                $table="antenna_ec5";
                $total_column="antenna";
            }
        }
     }
     setcookie("sub_table",$table);
     setcookie("master_table",$master_table);
     setcookie("total_table",$total_table);
     setcookie("total_column",$total_column);
     echo "\n";
    // echo "$table";
     echo "\n";
     //echo "$total_table";
     echo "\n";
     //echo "$total_column";
     echo "<form method='POST' action='#'>";
     echo "<h3>" . "Attendence table of $master_table of subject $total_column" . "</h3>";
     //echo "Attendence table of $master_table of subject $total_column";
     echo "<table border='1' align='center' id='table1'>";
     echo "<tr>";
     echo "<th>";
     echo "Roll No.";
     echo "</th>";
     echo "<th>";
     echo "Student Name";
     echo "</th>";
     echo "<th>";
     echo "Mark Attendence";
     echo "</th>";
     echo "</tr>";
     $sql = "select * from $master_table";
     $chk = mysqli_query($con,$sql);
     while($row = mysqli_fetch_array($chk))
     {
         $r=$row['roll_no'];
         //echo "$r";
        echo "<tr>";
        echo "<td>" . $row['roll_no'] ."</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>";
        echo "<input type='checkbox' id='check' name='check_list[]' value=$r>";
        echo "</td>";
        echo "</tr>";
     }
     echo "</table>";
     echo "<br>";
     echo "<br>";
     echo "<input type=submit name='submit4' id='submit4' value='Submit Attendence'>";
     echo "</form>";
     
     
   
}
?>
<?php
/**********************PHP FOR INSERING ATTENDENCE INTO TABLE******************************/
if(isset($_POST['submit4']))
{   //to run PHP script on submit
    $master_table=$_COOKIE['master_table'];
    $sub_table=$_COOKIE['sub_table'];
    $total_table=$_COOKIE['total_table'];
    $total_column=$_COOKIE['total_column'];
    $present = array(10);
    $count=0;
    $count_lecture=0;
    $field;
        if(isset($_POST['check_list']))
            {
              // Loop to store and display values of individual checked checkbox.
               foreach($_POST['check_list'] as $selected)
                {
                  //echo $selected."</br>";
                  $present[$count]=$selected;
                  $count=$count+1;
                }
            }
    for($i=0;$i<$count;$i++)
    {
        /*echo $present[$i];*/
     $sql2 = "insert into $sub_table(roll_no,Date) values($present[$i],curdate())";
     $chk2 = mysqli_query($con,$sql2);
    }
    /***************************UPDATING TOTAL LECTURE TABLE***********************************/
    $sql3 = "update $total_table set $total_column=$total_column+1";
    $chk3 = mysqli_query($con,$sql3);
        if($chk2==true)
      {
         $message2="Attendence Marked Successfully";
         //$message = "wrong answer";
         echo "<script type='text/javascript'>alert('$message2');window.location.href = 'Login.html';</script>";
         //header("Location:Login.html");
      }
}
?>
<?php
  /******************************PHP for SEEING SUBJECT Attendence***********************************/
if(isset($_POST['submit3']))
{   /********************CONDITION COMPARISION***************************************/
    $subject = $_POST["subject"];
    $branch = $_COOKIE["branch"];
    $semester =$_COOKIE["semester"];
    $section =$_COOKIE["section"];
       /*********************SEMESTER 1**********************************/
       if($semester=="sem1" && $section=='A')
       {
           //if($section="A")
           //{
               $total_table="total_sem1a";
               $master_table="sem1a";
               if($subject=="Physics")
               {
                $table="physics_sem1a";
                $total_column="physics";
               }
               else if($subject=="Chemistry")
               {
                $table="chemistry_sem1a";
                $total_column="chemistry";
               }
               else if($subject=="Math")
               {
                $table="math_sem1a";
                $total_column="math";
               }
               else if($subject=="C Programming")
               {
                $table="c_programming_sem1a";
                $total_column="c_programming";
               }
        }// }
  
           if($semester=="sem1"&& $section=="B")
           {
               $total_table="total_sem1b";
               $master_table="sem1b";
               if($subject=="Physics")
               {
                $table="physics_sem1b";
                $total_column="physics";
               }
               else if($subject=="Chemistry")
               {
                $table="chemistry_sem1b";
                $total_column="chemistry";
               }
               else if($subject=="Math")
               {
                $table="math_sem1b";
                $total_column="math";
               }
               else if($subject=="C Programming")
               {
                $table="c_programming_sem1b";
                $total_column="c_programming";
               }
           }
       //}
        /*********************SEMESTER 2**********************************/
        if($semester=="sem2"&& $section=='A')
       {
           //if($section="A")
           //{
               $total_table="total_sem2a";
               $master_table="sem2a";
               if($subject=="Physics")
               {
                $table="physics_sem2a";
                $total_column="physics";
               }
               else if($subject=="Chemistry")
               {
                $table="chemistry_sem2a";
                $total_column="chemistry";
               }
               else if($subject=="Math")
               {
                $table="math_sem2a";
                $total_column="math";
               }
               else if($subject=="C Programming")
               {
                $table="c_programming_sem2a";
                $total_column="c_programming";
               }
           }
  
           if($semester=="sem2"&&$section=="B")
           {
               $total_table="total_sem2b";
               $master_table="sem2b";
               if($subject=="Physics")
               {
                $table="physics_sem2b";
                $total_column="physics";
               }
               else if($subject=="Chemistry")
               {
                $table="chemistry_sem2b";
                $total_column="chemistry";
               }
               else if($subject=="Math")
               {
                $table="math_sem2b";
                $total_column="math";
               }
               else if($subject=="C Programming")
               {
                $table="c_programming_sem2b";
                $total_column="c_programming";
               }
           }
       
     /*********************SEMESTER 3**********************************/
     else if($semester=="sem3")
     {
         if($branch=="CC")
         {
             $total_table="total_cc3";
             $master_table="cc3";
             if($subject=="Discrete")
             {
                 $table="discrete_cc3";
                 $total_column="discrete";
             }
             else if($subject=="Logic")
             {
                 $table="logic_cc3";
                 $total_column="logic";
             }
             else if($subject=="Data Structure")
             {
                 $table="ds_cc3";
                 $total_column="ds";
             }
         }
         else if($branch=="BDA")
         {
             $total_table="total_bda3";
             $master_table="bda3";
             if($subject=="Discrete")
             {
                 $table="discrete_bda3";
                 $total_column="discrete";
             }
             else if($subject=="Logic")
             {
                 $table="logic_bda3";
                 $total_column="logic";
             }
             else if($subject=="Data Structure")
             {
                 $table="ds_bda3";
                 $total_column="ds";
             }
        }
        else if($branch=="EC")
        {
            $total_table="total_ec3";
            $master_table="ec3"; 
            if($subject=="Math")
            {
                $table="math_ec3";
                $total_column="math";
            }
            else if($subject=="EDC")
            {
                $table="edc_ec3";
                $total_column="edc";
            }
            else if($subject=="Signal System")
            {
                $table="signal_sys_ec3";
                $total_column="signal_sys";
            }
        }
     }

     /*********************SEMESTER 4**********************************/
     else if($semester=="sem4")
     {
         if($branch=="CC")
         {
             $total_table="total_cc4";
             $master_table="cc4";
             if($subject=="CBNST")
             {
                 $table="cbnst_cc4";
                 $total_column="cbnst";
             }
             else if($subject=="JAVA")
             {
                 $table="java_cc4";
                 $total_column="java";
             }
             else if($subject=="CC")
             {
                 $table="cc_cc4";
                 $total_column="cc";
             }
         }
         else if($branch=="BDA")
         {
             $total_table="total_bda4";
             $master_table="bda4";
             if($subject=="CBNST")
             {
                 $table="cbnst_bda4";
                 $total_column="cbnst";
             }
             else if($subject=="JAVA")
             {
                 $table="java_bda4";
                 $total_column="java";
             }
             else if($subject=="R Programming")
             {
                 $table="r_programming_bda4";
                 $total_column="r_programming";
             }
        }
        else if($branch=="EC")
        {
            $total_table="total_ec4";
            $master_table="ec4";   
            if($subject=="AIC")
            {
                $table="aic_ec4";
                $total_column="aic";
            }
            else if($subject=="Data Structure")
            {
                $table="ds_ec4";
                $total_column="ds";
            }
            else if($subject=="EMFT")
            {
                $table="emft_ec4";
                $total_column="emft";
            }
        }
     }

     /*********************SEMESTER 5**********************************/
     else if($semester=="sem5")
     {
         if($branch=="CC")
         {
             $total_table="total_cc5";
             $master_table="cc5";
             if($subject=="DAA")
             {
                 $table="daa_cc5";
                 $total_column="daa";
             }
             else if($subject=="OS")
             {
                 $table="os_cc5";
                 $total_column="os";
             }
             else if($subject=="DBMS")
             {
                 $table="dbms_cc5";
                 $total_column="dbms";
             }
         }
         else if($branch=="BDA")
         {
             $total_table="total_bda5";
             $master_table="bda5";
             if($subject=="DAA")
             {
                 $table="daa_bda5";
                 $total_column="daa";
             }
             else if($subject=="OS")
             {
                 $table="os_bda5";
                 $total_column="os";
             }
             else if($subject=="DBMS")
             {
                 $table="dbms_bda5";
                 $total_column="dbms";
             }
        }
        else if($branch=="EC")
        {
            $total_table="total_ec5";
            $master_table="ec5";
            if($subject=="MICRO CONTROLLER")
            {
                $table="micro_controller_ec5";
                $total_column="micro_controller";
            }
            else if($subject=="DIGITAL COMMUNICATION")
            {
                $table="digicomm_ec5";
                $total_column="digicomm";
            }
            else if($subject=="ANTENNA")
            {
                $table="antenna_ec5";
                $total_column="antenna";
            }
        }
     }
     echo "<h3>" . "Total Attendence of $master_table of subject $total_column" . "</h3>";
     echo "<table border='1' align='center' id='table2'>";
     echo "<tr>";
     echo "<th>";
     echo "Roll No.";
     echo "</th>";
     echo "<th>";
     echo "Student Name";
     echo "</th>";
     echo "<th>";
     echo "Attendence";
     echo "</th>";
     echo "<th>";
     echo "Total Lecture";
     echo "</th>";
     echo "</tr>";
     $sql4 = "Select * from $master_table";
     $chk4 = mysqli_query($con,$sql4);
     while($row = mysqli_fetch_array($chk4))
     {
         $r=$row['roll_no'];
        echo "<tr>";
        echo "<td>" . $row['roll_no'] ."</td>";
        echo "<td>" . $row['name'] . "</td>";
        //QUERY FOR COUNTING EACH STUDENT ATTENDENCE
        $sql5 = "Select count(Date) from $table where roll_no=$r";
        $chk5 = mysqli_query($con,$sql5);
          while($row = mysqli_fetch_array($chk5))
          {
             $c=$row['count(Date)'];
             echo "<td>" . $row['count(Date)'] ."</td>";
             //QUERY FOR FETCHING TOTAL LECTURE OF SELETED SUBJECT
             $sql6 = "Select $total_column from $total_table";
             $chk6 = mysqli_query($con,$sql6);
             while($row = mysqli_fetch_array($chk6))
              {
               echo "<td>" . $row[$total_column] ."</td>";
              }
           }
        echo "</tr>";
     }
      echo "</table>";
}     
?>
</body>
</html>