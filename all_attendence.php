<html>
<head>
    
    <head>
       <style type="text/css">
       body
       {
           text-align:center
       }
      #table3
      {
     border: 1px solid black;
     border-collapse: collapse;
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
      </style>
</head>
<body>
 <?php
        include_once('connection.php');
        $branch = $_POST['branch'];//document.getElementById("branch").value;
        $sem = $_POST['semester'];//document.getElementById("semester").value;
        $sec = $_POST['section'];
    if(isset($_POST['submitall']))
     {
         /***************************************SEMESTER 1 AND SEMESTER 2*************************************/
         if($sem=="sem1"||$sem=="sem2")
         {
             if($sem=="sem1")
               {
                   if($sec=="A")
                     {
                         $master_table="sem1a";
                         $sub1="physics_sem1a";
                         $sub2="chemistry_sem1a";
                         $sub3="math_sem1a";
                         $sub4="c_programming_sem1a";
                         $total_lec="total_sem1a";
                     }
                     else if($sec=="B")
                     {
                        $master_table="sem1b";
                        $sub1="physics_sem1b";
                        $sub2="chemistry_sem1b";
                        $sub3="math_sem1b";
                        $sub4="c_programming_sem1b";
                        $total_lec="total_sem1b";
                     }
               }
             else if($sem=="sem2")
               {
                 if($sec=="A")
                 {
                    $master_table="sem2a";
                    $sub1="physics_sem2a";
                    $sub2="chemistry_sem2a";
                    $sub3="math_sem2a";
                    $sub4="c_programming_sem2a";
                    $total_lec="total_sem2a";
                 }
                 else if($sec=="B")
                 {
                   $master_table="sem2b";
                   $sub1="physics_sem2b";
                   $sub2="chemistry_sem2b";
                   $sub3="math_sem2b";
                   $sub4="c_programming_sem2b";
                   $total_lec="total_sem2b";
                 }
               }
               echo "<h1>";
               echo "Attendence Record of $sem section('$sec')";
               echo "</h1>";
               echo "<table border='1' align='center' id='table3'>";
               echo "<tr>";
               echo "<th>";
               echo "Roll No.";
               echo "</th>";
               echo "<th>";
               echo "Student Name";
               echo "</th>";
               echo "<th>";
               echo "Physics";
               echo "</th>";
               echo "<th>";
               echo "Total Lecture";
               echo "</th>";
               echo "<th>";
               echo "Chemistry";
               echo "</th>";
               echo "<th>";
               echo "Total Lecture";
               echo "</th>";
               echo "<th>";
               echo "Math";
               echo "</th>";
               echo "<th>";
               echo "Total Lecture";
               echo "</th>";
               echo "<th>";
               echo "C Programming";
               echo "</th>";
               echo "<th>";
               echo "Total Lecture";
               echo "</th>";
               echo "</tr>";
               $sql1 = "select * from $master_table";
               $chk1 = mysqli_query($con,$sql1);
                while($row = mysqli_fetch_array($chk1))
                {
                    $r=$row['roll_no'];
                    echo "<tr>";
                    echo "<td>" . $row['roll_no'] ."</td>";//ROLL_NO
                    echo "<td>" . $row['name'] . "</td>";//NAME
                    //QUERY FOR COUNTING EACH STUDENT ATTENDENCE
                    $sql2 = "Select count(Date) from $sub1 where roll_no=$r";
                    $chk2 = mysqli_query($con,$sql2);
                      while($row = mysqli_fetch_array($chk2))
                       {
                         $c=$row['count(Date)'];
                         echo "<td>" . $row['count(Date)'] ."</td>";//PHYSICS
                         //QUERY FOR FETCHING TOTAL LECTURE OF SELETED SUBJECT
                         $sql3 = "Select physics from $total_lec";
                         $chk3 = mysqli_query($con,$sql3);
                           while($row = mysqli_fetch_array($chk3))
                            {
                               echo "<td>" . $row['physics'] ."</td>";//TOTAL PHYSICS LECTURE
                               $sql4 = "Select count(Date) from $sub2 where roll_no=$r";
                               $chk4 = mysqli_query($con,$sql4);
                               while($row = mysqli_fetch_array($chk4))
                                 {
                                    $c1=$row['count(Date)'];
                                    echo "<td>" . $row['count(Date)'] ."</td>";//CHEMISTRY
                                    $sql5 = "Select chemistry from $total_lec";
                                    $chk5 = mysqli_query($con,$sql5);
                                    while($row = mysqli_fetch_array($chk5))
                                    {
                                        echo "<td>" . $row['chemistry'] ."</td>";//TOTAL Chemistry LECTURE
                                        $sql6 = "Select count(Date) from $sub3 where roll_no=$r";
                                        $chk6 = mysqli_query($con,$sql6);
                                        while($row = mysqli_fetch_array($chk6))
                                          {
                                             $c2=$row['count(Date)'];
                                             echo "<td>" . $row['count(Date)'] ."</td>";//MATH
                                             $sql7 = "Select math from $total_lec";
                                             $chk7 = mysqli_query($con,$sql7);
                                             while($row = mysqli_fetch_array($chk7))
                                             {
                                                 echo "<td>" . $row['math'] ."</td>";//TOTAL MATH LECTURE
                                                 $sql8 = "Select count(Date) from $sub4 where roll_no=$r";
                                                 $chk8 = mysqli_query($con,$sql8);
                                                 while($row = mysqli_fetch_array($chk8))
                                                   {
                                                      $c3=$row['count(Date)'];
                                                      echo "<td>" . $row['count(Date)'] ."</td>";//C Programming
                                                      $sql9 = "Select c_programming from $total_lec";
                                                      $chk9 = mysqli_query($con,$sql9);
                                                      while($row = mysqli_fetch_array($chk9))
                                                      {
                                                          echo "<td>" . $row['c_programming'] ."</td>";//TOTAL C programming LECTURE
                                                            
                                                      }
                                                   }        
                                             }
                                          }   
                                    }  
                               }
                        }
                      }
                      
                      echo "</tr>";
                }
                echo "</table>";
            }
         /***********************************************SEMESTER 3 CC*************************************/   
         else if($sem=="sem3" && $branch=="CC")
         {
            $master_table="cc3";
            $sub1="discrete_cc3";
            $sub2="logic_cc3";
            $sub3="ds_cc3";
            $total_lec="total_cc3";
               echo "<h1>";
               echo "Attendence Record of $sem branch('$branch')";
               echo "</h1>";
               echo "<table border='1' align='center' id='table3'>";
               echo "<tr>";
               echo "<th>";
               echo "Roll No.";
               echo "</th>";
               echo "<th>";
               echo "Student Name";
               echo "</th>";
               echo "<th>";
               echo "Discrete";
               echo "</th>";
               echo "<th>";
               echo "Total Lecture";
               echo "</th>";
               echo "<th>";
               echo "Logic";
               echo "</th>";
               echo "<th>";
               echo "Total Lecture";
               echo "</th>";
               echo "<th>";
               echo "Data Structure";
               echo "</th>";
               echo "<th>";
               echo "Total Lecture";
               echo "</th>";
               echo "</tr>";
               $sql1 = "select * from $master_table";
               $chk1 = mysqli_query($con,$sql1);
                while($row = mysqli_fetch_array($chk1))
                {
                    $r=$row['roll_no'];
                    echo "<tr>";
                    echo "<td>" . $row['roll_no'] ."</td>";//ROLL_NO
                    echo "<td>" . $row['name'] . "</td>";//NAME
                    //QUERY FOR COUNTING EACH STUDENT ATTENDENCE
                    $sql2 = "Select count(Date) from $sub1 where roll_no=$r";
                    $chk2 = mysqli_query($con,$sql2);
                      while($row = mysqli_fetch_array($chk2))
                       {
                         $c=$row['count(Date)'];
                         echo "<td>" . $row['count(Date)'] ."</td>";//DISCRETE
                         //QUERY FOR FETCHING TOTAL LECTURE OF SELETED SUBJECT
                         $sql3 = "Select discrete from $total_lec";
                         $chk3 = mysqli_query($con,$sql3);
                           while($row = mysqli_fetch_array($chk3))
                            {
                               echo "<td>" . $row['discrete'] ."</td>";//TOTAL DISCRETE LECTURE
                               $sql4 = "Select count(Date) from $sub2 where roll_no=$r";
                               $chk4 = mysqli_query($con,$sql4);
                               while($row = mysqli_fetch_array($chk4))
                                 {
                                    $c1=$row['count(Date)'];
                                    echo "<td>" . $row['count(Date)'] ."</td>";//LOGIC
                                    $sql5 = "Select logic from $total_lec";
                                    $chk5 = mysqli_query($con,$sql5);
                                    while($row = mysqli_fetch_array($chk5))
                                    {
                                        echo "<td>" . $row['logic'] ."</td>";//TOTAL LOGIC LECTURE
                                        $sql6 = "Select count(Date) from $sub3 where roll_no=$r";
                                        $chk6 = mysqli_query($con,$sql6);
                                        while($row = mysqli_fetch_array($chk6))
                                          {
                                             $c2=$row['count(Date)'];
                                             echo "<td>" . $row['count(Date)'] ."</td>";//DATA STRUCTURE
                                             $sql7 = "Select ds from $total_lec";
                                             $chk7 = mysqli_query($con,$sql7);
                                             while($row = mysqli_fetch_array($chk7))
                                             {
                                                 echo "<td>" . $row['ds'] ."</td>";//TOTAL DATA STRUCTURE LECTURE
                                             }
                                          }
                                        }
                                 }
                             }
                         }
                            echo "</tr>";
                 }                   
           echo "</table>";

         }
          /***********************************************SEMESTER 3 BDA*************************************/   
          else if($sem=="sem3" && $branch=="BDA")
          {
             $master_table="bda3";
             $sub1="discrete_bda3";
             $sub2="logic_bda3";
             $sub3="ds_bda3";
             $total_lec="total_bda3";
             echo "<h1>";
             echo "Attendence Record of $sem branch('$branch')";
             echo "</h1>";
             echo "<table border='1' align='center' id='table3'>";
                echo "<tr>";
                echo "<th>";
                echo "Roll No.";
                echo "</th>";
                echo "<th>";
                echo "Student Name";
                echo "</th>";
                echo "<th>";
                echo "Discrete";
                echo "</th>";
                echo "<th>";
                echo "Total Lecture";
                echo "</th>";
                echo "<th>";
                echo "Logic";
                echo "</th>";
                echo "<th>";
                echo "Total Lecture";
                echo "</th>";
                echo "<th>";
                echo "Data Structure";
                echo "</th>";
                echo "<th>";
                echo "Total Lecture";
                echo "</th>";
                echo "</tr>";
                $sql1 = "select * from $master_table";
                $chk1 = mysqli_query($con,$sql1);
                 while($row = mysqli_fetch_array($chk1))
                 {
                     $r=$row['roll_no'];
                     echo "<tr>";
                     echo "<td>" . $row['roll_no'] ."</td>";//ROLL_NO
                     echo "<td>" . $row['name'] . "</td>";//NAME
                     //QUERY FOR COUNTING EACH STUDENT ATTENDENCE
                     $sql2 = "Select count(Date) from $sub1 where roll_no=$r";
                     $chk2 = mysqli_query($con,$sql2);
                       while($row = mysqli_fetch_array($chk2))
                        {
                          $c=$row['count(Date)'];
                          echo "<td>" . $row['count(Date)'] ."</td>";//DISCRETE
                          //QUERY FOR FETCHING TOTAL LECTURE OF SELETED SUBJECT
                          $sql3 = "Select discrete from $total_lec";
                          $chk3 = mysqli_query($con,$sql3);
                            while($row = mysqli_fetch_array($chk3))
                             {
                                echo "<td>" . $row['discrete'] ."</td>";//TOTAL DISCRETE LECTURE
                                $sql4 = "Select count(Date) from $sub2 where roll_no=$r";
                                $chk4 = mysqli_query($con,$sql4);
                                while($row = mysqli_fetch_array($chk4))
                                  {
                                     $c1=$row['count(Date)'];
                                     echo "<td>" . $row['count(Date)'] ."</td>";//LOGIC
                                     $sql5 = "Select logic from $total_lec";
                                     $chk5 = mysqli_query($con,$sql5);
                                     while($row = mysqli_fetch_array($chk5))
                                     {
                                         echo "<td>" . $row['logic'] ."</td>";//TOTAL LOGIC LECTURE
                                         $sql6 = "Select count(Date) from $sub3 where roll_no=$r";
                                         $chk6 = mysqli_query($con,$sql6);
                                         while($row = mysqli_fetch_array($chk6))
                                           {
                                              $c2=$row['count(Date)'];
                                              echo "<td>" . $row['count(Date)'] ."</td>";//DATA STRUCTURE
                                              $sql7 = "Select ds from $total_lec";
                                              $chk7 = mysqli_query($con,$sql7);
                                              while($row = mysqli_fetch_array($chk7))
                                              {
                                                  echo "<td>" . $row['ds'] ."</td>";//TOTAL DATA STRUCTURE LECTURE
                                              }
                                           }
                                         }
                                  }
                              }
                          }
                             echo "</tr>";
                  }                   
            echo "</table>";
 
          } 
          
                    /***********************************************SEMESTER 3 EC*************************************/   
                    else if($sem=="sem3" && $branch=="EC")
                    {
                       $master_table="ec3";
                       $sub1="math_ec3";
                       $sub2="edc_ec3";
                       $sub3="signal_sys_ec3";
                       $total_lec="total_ec3";
                       echo "<h1>";
                       echo "Attendence Record of $sem branch('$branch')";
                       echo "</h1>";
                       echo "<table border='1' align='center' id='table3'>";
                          echo "<tr>";
                          echo "<th>";
                          echo "Roll No.";
                          echo "</th>";
                          echo "<th>";
                          echo "Student Name";
                          echo "</th>";
                          echo "<th>";
                          echo "Math";
                          echo "</th>";
                          echo "<th>";
                          echo "Total Lecture";
                          echo "</th>";
                          echo "<th>";
                          echo "EDC";
                          echo "</th>";
                          echo "<th>";
                          echo "Total Lecture";
                          echo "</th>";
                          echo "<th>";
                          echo "Signal System";
                          echo "</th>";
                          echo "<th>";
                          echo "Total Lecture";
                          echo "</th>";
                          echo "</tr>";
                          $sql1 = "select * from $master_table";
                          $chk1 = mysqli_query($con,$sql1);
                           while($row = mysqli_fetch_array($chk1))
                           {
                               $r=$row['roll_no'];
                               echo "<tr>";
                               echo "<td>" . $row['roll_no'] ."</td>";//ROLL_NO
                               echo "<td>" . $row['name'] . "</td>";//NAME
                               //QUERY FOR COUNTING EACH STUDENT ATTENDENCE
                               $sql2 = "Select count(Date) from $sub1 where roll_no=$r";
                               $chk2 = mysqli_query($con,$sql2);
                                 while($row = mysqli_fetch_array($chk2))
                                  {
                                    $c=$row['count(Date)'];
                                    echo "<td>" . $row['count(Date)'] ."</td>";//MATH
                                    //QUERY FOR FETCHING TOTAL LECTURE OF SELETED SUBJECT
                                    $sql3 = "Select math from $total_lec";
                                    $chk3 = mysqli_query($con,$sql3);
                                      while($row = mysqli_fetch_array($chk3))
                                       {
                                          echo "<td>" . $row['math'] ."</td>";//TOTAL MATH LECTURE
                                          $sql4 = "Select count(Date) from $sub2 where roll_no=$r";
                                          $chk4 = mysqli_query($con,$sql4);
                                          while($row = mysqli_fetch_array($chk4))
                                            {
                                               $c1=$row['count(Date)'];
                                               echo "<td>" . $row['count(Date)'] ."</td>";//EDC
                                               $sql5 = "Select edc from $total_lec";
                                               $chk5 = mysqli_query($con,$sql5);
                                               while($row = mysqli_fetch_array($chk5))
                                               {
                                                   echo "<td>" . $row['edc'] ."</td>";//TOTAL EDC LECTURE
                                                   $sql6 = "Select count(Date) from $sub3 where roll_no=$r";
                                                   $chk6 = mysqli_query($con,$sql6);
                                                   while($row = mysqli_fetch_array($chk6))
                                                     {
                                                        $c2=$row['count(Date)'];
                                                        echo "<td>" . $row['count(Date)'] ."</td>";//Signal System
                                                        $sql7 = "Select signal_sys from $total_lec";
                                                        $chk7 = mysqli_query($con,$sql7);
                                                        while($row = mysqli_fetch_array($chk7))
                                                        {
                                                            echo "<td>" . $row['signal_sys'] ."</td>";//TOTAL Signal System LECTURE
                                                        }
                                                     }
                                                   }
                                            }
                                        }
                                    }
                                       echo "</tr>";
                            }                   
                      echo "</table>";
           
                    }
               
       /***********************************************SEMESTER 4 CC*************************************/   
       else if($sem=="sem4" && $branch=="CC")
       {
          $master_table="cc4";
          $sub1="cbnst_cc4";
          $sub2="java_cc4";
          $sub3="cc_cc4";
          $total_lec="total_cc4";
          echo "<h1>";
          echo "Attendence Record of $sem branch('$branch')";
          echo "</h1>";
          echo "<table border='1' align='center' id='table3'>";
             echo "<tr>";
             echo "<th>";
             echo "Roll No.";
             echo "</th>";
             echo "<th>";
             echo "Student Name";
             echo "</th>";
             echo "<th>";
             echo "CBNST";
             echo "</th>";
             echo "<th>";
             echo "Total Lecture";
             echo "</th>";
             echo "<th>";
             echo "JAVA";
             echo "</th>";
             echo "<th>";
             echo "Total Lecture";
             echo "</th>";
             echo "<th>";
             echo "Cloud Computing";
             echo "</th>";
             echo "<th>";
             echo "Total Lecture";
             echo "</th>";
             echo "</tr>";
             $sql1 = "select * from $master_table";
             $chk1 = mysqli_query($con,$sql1);
              while($row = mysqli_fetch_array($chk1))
              {
                  $r=$row['roll_no'];
                  echo "<tr>";
                  echo "<td>" . $row['roll_no'] ."</td>";//ROLL_NO
                  echo "<td>" . $row['name'] . "</td>";//NAME
                  //QUERY FOR COUNTING EACH STUDENT ATTENDENCE
                  $sql2 = "Select count(Date) from $sub1 where roll_no=$r";
                  $chk2 = mysqli_query($con,$sql2);
                    while($row = mysqli_fetch_array($chk2))
                     {
                       $c=$row['count(Date)'];
                       echo "<td>" . $row['count(Date)'] ."</td>";//CBNST
                       //QUERY FOR FETCHING TOTAL LECTURE OF SELETED SUBJECT
                       $sql3 = "Select cbnst from $total_lec";
                       $chk3 = mysqli_query($con,$sql3);
                         while($row = mysqli_fetch_array($chk3))
                          {
                             echo "<td>" . $row['cbnst'] ."</td>";//TOTAL CBNST LECTURE
                             $sql4 = "Select count(Date) from $sub2 where roll_no=$r";
                             $chk4 = mysqli_query($con,$sql4);
                             while($row = mysqli_fetch_array($chk4))
                               {
                                  $c1=$row['count(Date)'];
                                  echo "<td>" . $row['count(Date)'] ."</td>";//JAVA
                                  $sql5 = "Select java from $total_lec";
                                  $chk5 = mysqli_query($con,$sql5);
                                  while($row = mysqli_fetch_array($chk5))
                                  {
                                      echo "<td>" . $row['java'] ."</td>";//TOTAL JAVA LECTURE
                                      $sql6 = "Select count(Date) from $sub3 where roll_no=$r";
                                      $chk6 = mysqli_query($con,$sql6);
                                      while($row = mysqli_fetch_array($chk6))
                                        {
                                           $c2=$row['count(Date)'];
                                           echo "<td>" . $row['count(Date)'] ."</td>";//CLOUD
                                           $sql7 = "Select cc from $total_lec";
                                           $chk7 = mysqli_query($con,$sql7);
                                           while($row = mysqli_fetch_array($chk7))
                                           {
                                               echo "<td>" . $row['cc'] ."</td>";//TOTAL CLOUD LECTURE
                                           }
                                        }
                                      }
                               }
                           }
                       }
                          echo "</tr>";
               }                   
         echo "</table>";

       }
       
    /***********************************************SEMESTER 4 BDA*************************************/   
    else if($sem=="sem4" && $branch=="BDA")
    {
       $master_table="bda4";
       $sub1="cbnst_bda4";
       $sub2="java_bda4";
       $sub3="r_programming_bda4";
       $total_lec="total_bda4";
       echo "<h1>";
       echo "Attendence Record of $sem branch('$branch')";
       echo "</h1>";
       echo "<table border='1' align='center' id='table3'>";
          echo "<tr>";
          echo "<th>";
          echo "Roll No.";
          echo "</th>";
          echo "<th>";
          echo "Student Name";
          echo "</th>";
          echo "<th>";
          echo "CBNST";
          echo "</th>";
          echo "<th>";
          echo "Total Lecture";
          echo "</th>";
          echo "<th>";
          echo "JAVA";
          echo "</th>";
          echo "<th>";
          echo "Total Lecture";
          echo "</th>";
          echo "<th>";
          echo "R Programming";
          echo "</th>";
          echo "<th>";
          echo "Total Lecture";
          echo "</th>";
          echo "</tr>";
          $sql1 = "select * from $master_table";
          $chk1 = mysqli_query($con,$sql1);
           while($row = mysqli_fetch_array($chk1))
           {
               $r=$row['roll_no'];
               echo "<tr>";
               echo "<td>" . $row['roll_no'] ."</td>";//ROLL_NO
               echo "<td>" . $row['name'] . "</td>";//NAME
               //QUERY FOR COUNTING EACH STUDENT ATTENDENCE
               $sql2 = "Select count(Date) from $sub1 where roll_no=$r";
               $chk2 = mysqli_query($con,$sql2);
                 while($row = mysqli_fetch_array($chk2))
                  {
                    $c=$row['count(Date)'];
                    echo "<td>" . $row['count(Date)'] ."</td>";//CBNST
                    //QUERY FOR FETCHING TOTAL LECTURE OF SELETED SUBJECT
                    $sql3 = "Select cbnst from $total_lec";
                    $chk3 = mysqli_query($con,$sql3);
                      while($row = mysqli_fetch_array($chk3))
                       {
                          echo "<td>" . $row['cbnst'] ."</td>";//TOTAL CBNST LECTURE
                          $sql4 = "Select count(Date) from $sub2 where roll_no=$r";
                          $chk4 = mysqli_query($con,$sql4);
                          while($row = mysqli_fetch_array($chk4))
                            {
                               $c1=$row['count(Date)'];
                               echo "<td>" . $row['count(Date)'] ."</td>";//JAVA
                               $sql5 = "Select java from $total_lec";
                               $chk5 = mysqli_query($con,$sql5);
                               while($row = mysqli_fetch_array($chk5))
                               {
                                   echo "<td>" . $row['java'] ."</td>";//TOTAL JAVA LECTURE
                                   $sql6 = "Select count(Date) from $sub3 where roll_no=$r";
                                   $chk6 = mysqli_query($con,$sql6);
                                   while($row = mysqli_fetch_array($chk6))
                                     {
                                        $c2=$row['count(Date)'];
                                        echo "<td>" . $row['count(Date)'] ."</td>";//R Pragramming
                                        $sql7 = "Select r_programming from $total_lec";
                                        $chk7 = mysqli_query($con,$sql7);
                                        while($row = mysqli_fetch_array($chk7))
                                        {
                                            echo "<td>" . $row['r_programming'] ."</td>";//TOTAL R Programming LECTURE
                                        }
                                     }
                                   }
                            }
                        }
                    }
                       echo "</tr>";
            }                   
      echo "</table>";

    }
    
    /***********************************************SEMESTER 4 EC*************************************/   
    else if($sem=="sem4" && $branch=="EC")
    {
       $master_table="ec4";
       $sub1="aic_ec4";
       $sub2="ds_ec4";
       $sub3="emft_ec4";
       $total_lec="total_ec4";
       echo "<h1>";
       echo "Attendence Record of $sem branch('$branch')";
       echo "</h1>";
       echo "<table border='1' align='center' id='table3'>";
          echo "<tr>";
          echo "<th>";
          echo "Roll No.";
          echo "</th>";
          echo "<th>";
          echo "Student Name";
          echo "</th>";
          echo "<th>";
          echo "AIC";
          echo "</th>";
          echo "<th>";
          echo "Total Lecture";
          echo "</th>";
          echo "<th>";
          echo "Data Structure";
          echo "</th>";
          echo "<th>";
          echo "Total Lecture";
          echo "</th>";
          echo "<th>";
          echo "EMFT";
          echo "</th>";
          echo "<th>";
          echo "Total Lecture";
          echo "</th>";
          echo "</tr>";
          $sql1 = "select * from $master_table";
          $chk1 = mysqli_query($con,$sql1);
           while($row = mysqli_fetch_array($chk1))
           {
               $r=$row['roll_no'];
               echo "<tr>";
               echo "<td>" . $row['roll_no'] ."</td>";//ROLL_NO
               echo "<td>" . $row['name'] . "</td>";//NAME
               //QUERY FOR COUNTING EACH STUDENT ATTENDENCE
               $sql2 = "Select count(Date) from $sub1 where roll_no=$r";
               $chk2 = mysqli_query($con,$sql2);
                 while($row = mysqli_fetch_array($chk2))
                  {
                    $c=$row['count(Date)'];
                    echo "<td>" . $row['count(Date)'] ."</td>";//AIC
                    //QUERY FOR FETCHING TOTAL LECTURE OF SELETED SUBJECT
                    $sql3 = "Select aic from $total_lec";
                    $chk3 = mysqli_query($con,$sql3);
                      while($row = mysqli_fetch_array($chk3))
                       {
                          echo "<td>" . $row['aic'] ."</td>";//TOTAL AIC LECTURE
                          $sql4 = "Select count(Date) from $sub2 where roll_no=$r";
                          $chk4 = mysqli_query($con,$sql4);
                          while($row = mysqli_fetch_array($chk4))
                            {
                               $c1=$row['count(Date)'];
                               echo "<td>" . $row['count(Date)'] ."</td>";//Data Structure
                               $sql5 = "Select ds from $total_lec";
                               $chk5 = mysqli_query($con,$sql5);
                               while($row = mysqli_fetch_array($chk5))
                               {
                                   echo "<td>" . $row['ds'] ."</td>";//TOTAL Data STructure LECTURE
                                   $sql6 = "Select count(Date) from $sub3 where roll_no=$r";
                                   $chk6 = mysqli_query($con,$sql6);
                                   while($row = mysqli_fetch_array($chk6))
                                     {
                                        $c2=$row['count(Date)'];
                                        echo "<td>" . $row['count(Date)'] ."</td>";//EMFT
                                        $sql7 = "Select emft from $total_lec";
                                        $chk7 = mysqli_query($con,$sql7);
                                        while($row = mysqli_fetch_array($chk7))
                                        {
                                            echo "<td>" . $row['emft'] ."</td>";//TOTAL EMFT LECTURE
                                        }
                                     }
                                   }
                            }
                        }
                    }
                       echo "</tr>";
            }                   
      echo "</table>";

    }

    /***********************************************SEMESTER 5 CC*************************************/   
    else if($sem=="sem5" && $branch=="CC")
    {
       $master_table="cc5";
       $sub1="daa_cc5";
       $sub2="os_cc5";
       $sub3="dbms_cc5";
       $total_lec="total_cc5";
       echo "<h1>";
       echo "Attendence Record of $sem branch('$branch')";
       echo "</h1>";
       echo "<table border='1' align='center' id='table3'>";
          echo "<tr>";
          echo "<th>";
          echo "Roll No.";
          echo "</th>";
          echo "<th>";
          echo "Student Name";
          echo "</th>";
          echo "<th>";
          echo "Design and Analysis of Alogorithm";
          echo "</th>";
          echo "<th>";
          echo "Total Lecture";
          echo "</th>";
          echo "<th>";
          echo "Operating System";
          echo "</th>";
          echo "<th>";
          echo "Total Lecture";
          echo "</th>";
          echo "<th>";
          echo "Database Management System";
          echo "</th>";
          echo "<th>";
          echo "Total Lecture";
          echo "</th>";
          echo "</tr>";
          $sql1 = "select * from $master_table";
          $chk1 = mysqli_query($con,$sql1);
           while($row = mysqli_fetch_array($chk1))
           {
               $r=$row['roll_no'];
               echo "<tr>";
               echo "<td>" . $row['roll_no'] ."</td>";//ROLL_NO
               echo "<td>" . $row['name'] . "</td>";//NAME
               //QUERY FOR COUNTING EACH STUDENT ATTENDENCE
               $sql2 = "Select count(Date) from $sub1 where roll_no=$r";
               $chk2 = mysqli_query($con,$sql2);
                 while($row = mysqli_fetch_array($chk2))
                  {
                    $c=$row['count(Date)'];
                    echo "<td>" . $row['count(Date)'] ."</td>";//DAA
                    //QUERY FOR FETCHING TOTAL LECTURE OF SELETED SUBJECT
                    $sql3 = "Select daa from $total_lec";
                    $chk3 = mysqli_query($con,$sql3);
                      while($row = mysqli_fetch_array($chk3))
                       {
                          echo "<td>" . $row['daa'] ."</td>";//TOTAL daa LECTURE
                          $sql4 = "Select count(Date) from $sub2 where roll_no=$r";
                          $chk4 = mysqli_query($con,$sql4);
                          while($row = mysqli_fetch_array($chk4))
                            {
                               $c1=$row['count(Date)'];
                               echo "<td>" . $row['count(Date)'] ."</td>";//OS
                               $sql5 = "Select os from $total_lec";
                               $chk5 = mysqli_query($con,$sql5);
                               while($row = mysqli_fetch_array($chk5))
                               {
                                   echo "<td>" . $row['os'] ."</td>";//TOTAL OS LECTURE
                                   $sql6 = "Select count(Date) from $sub3 where roll_no=$r";
                                   $chk6 = mysqli_query($con,$sql6);
                                   while($row = mysqli_fetch_array($chk6))
                                     {
                                        $c2=$row['count(Date)'];
                                        echo "<td>" . $row['count(Date)'] ."</td>";//DBMS
                                        $sql7 = "Select dbms from $total_lec";
                                        $chk7 = mysqli_query($con,$sql7);
                                        while($row = mysqli_fetch_array($chk7))
                                        {
                                            echo "<td>" . $row['dbms'] ."</td>";//TOTAL DBMS LECTURE
                                        }
                                     }
                                   }
                            }
                        }
                    }
                       echo "</tr>";
            }                   
      echo "</table>";

    }

    /***********************************************SEMESTER 5 BDA*************************************/   
    else if($sem=="sem5" && $branch=="BDA")
    {
       $master_table="bda5";
       $sub1="daa_bda5";
       $sub2="os_bda5";
       $sub3="dbms_bda5";
       $total_lec="total_bda5";
       echo "<h1>";
       echo "Attendence Record of $sem branch('$branch')";
       echo "</h1>";
       echo "<table border='1' align='center' id='table3'>";
          echo "<tr>";
          echo "<th>";
          echo "Roll No.";
          echo "</th>";
          echo "<th>";
          echo "Student Name";
          echo "</th>";
          echo "<th>";
          echo "Design and Analysis of Alogorithm";
          echo "</th>";
          echo "<th>";
          echo "Total Lecture";
          echo "</th>";
          echo "<th>";
          echo "Operating System";
          echo "</th>";
          echo "<th>";
          echo "Total Lecture";
          echo "</th>";
          echo "<th>";
          echo "Database Management System";
          echo "</th>";
          echo "<th>";
          echo "Total Lecture";
          echo "</th>";
          echo "</tr>";
          $sql1 = "select * from $master_table";
          $chk1 = mysqli_query($con,$sql1);
           while($row = mysqli_fetch_array($chk1))
           {
               $r=$row['roll_no'];
               echo "<tr>";
               echo "<td>" . $row['roll_no'] ."</td>";//ROLL_NO
               echo "<td>" . $row['name'] . "</td>";//NAME
               //QUERY FOR COUNTING EACH STUDENT ATTENDENCE
               $sql2 = "Select count(Date) from $sub1 where roll_no=$r";
               $chk2 = mysqli_query($con,$sql2);
                 while($row = mysqli_fetch_array($chk2))
                  {
                    $c=$row['count(Date)'];
                    echo "<td>" . $row['count(Date)'] ."</td>";//DAA
                    //QUERY FOR FETCHING TOTAL LECTURE OF SELETED SUBJECT
                    $sql3 = "Select daa from $total_lec";
                    $chk3 = mysqli_query($con,$sql3);
                      while($row = mysqli_fetch_array($chk3))
                       {
                          echo "<td>" . $row['daa'] ."</td>";//TOTAL daa LECTURE
                          $sql4 = "Select count(Date) from $sub2 where roll_no=$r";
                          $chk4 = mysqli_query($con,$sql4);
                          while($row = mysqli_fetch_array($chk4))
                            {
                               $c1=$row['count(Date)'];
                               echo "<td>" . $row['count(Date)'] ."</td>";//OS
                               $sql5 = "Select os from $total_lec";
                               $chk5 = mysqli_query($con,$sql5);
                               while($row = mysqli_fetch_array($chk5))
                               {
                                   echo "<td>" . $row['os'] ."</td>";//TOTAL OS LECTURE
                                   $sql6 = "Select count(Date) from $sub3 where roll_no=$r";
                                   $chk6 = mysqli_query($con,$sql6);
                                   while($row = mysqli_fetch_array($chk6))
                                     {
                                        $c2=$row['count(Date)'];
                                        echo "<td>" . $row['count(Date)'] ."</td>";//DBMS
                                        $sql7 = "Select dbms from $total_lec";
                                        $chk7 = mysqli_query($con,$sql7);
                                        while($row = mysqli_fetch_array($chk7))
                                        {
                                            echo "<td>" . $row['dbms'] ."</td>";//TOTAL DBMS LECTURE
                                        }
                                     }
                                   }
                            }
                        }
                    }
                       echo "</tr>";
            }                   
      echo "</table>";

    }

    /***********************************************SEMESTER 5 EC*************************************/   
    else if($sem=="sem5" && $branch=="EC")
    {
       $master_table="ec5";
       $sub1="micro_controller_ec5";
       $sub2="digicomm_ec5";
       $sub3="antenna_ec5";
       $total_lec="total_ec5";
       echo "<h1>";
       echo "Attendence Record of $sem branch('$branch')";
       echo "</h1>";
       echo "<table border='1' align='center' id='table3'>";
          echo "<tr>";
          echo "<th>";
          echo "Roll No.";
          echo "</th>";
          echo "<th>";
          echo "Student Name";
          echo "</th>";
          echo "<th>";
          echo "Micro Controller";
          echo "</th>";
          echo "<th>";
          echo "Total Lecture";
          echo "</th>";
          echo "<th>";
          echo "Digital Communication";
          echo "</th>";
          echo "<th>";
          echo "Total Lecture";
          echo "</th>";
          echo "<th>";
          echo "Antenna";
          echo "</th>";
          echo "<th>";
          echo "Total Lecture";
          echo "</th>";
          echo "</tr>";
          $sql1 = "select * from $master_table";
          $chk1 = mysqli_query($con,$sql1);
           while($row = mysqli_fetch_array($chk1))
           {
               $r=$row['roll_no'];
               echo "<tr>";
               echo "<td>" . $row['roll_no'] ."</td>";//ROLL_NO
               echo "<td>" . $row['name'] . "</td>";//NAME
               //QUERY FOR COUNTING EACH STUDENT ATTENDENCE
               $sql2 = "Select count(Date) from $sub1 where roll_no=$r";
               $chk2 = mysqli_query($con,$sql2);
                 while($row = mysqli_fetch_array($chk2))
                  {
                    $c=$row['count(Date)'];
                    echo "<td>" . $row['count(Date)'] ."</td>";//Micro Controller
                    //QUERY FOR FETCHING TOTAL LECTURE OF SELETED SUBJECT
                    $sql3 = "Select micro_controller from $total_lec";
                    $chk3 = mysqli_query($con,$sql3);
                      while($row = mysqli_fetch_array($chk3))
                       {
                          echo "<td>" . $row['micro_controller'] ."</td>";//TOTAL Micro Controller LECTURE
                          $sql4 = "Select count(Date) from $sub2 where roll_no=$r";
                          $chk4 = mysqli_query($con,$sql4);
                          while($row = mysqli_fetch_array($chk4))
                            {
                               $c1=$row['count(Date)'];
                               echo "<td>" . $row['count(Date)'] ."</td>";//Digital Communication
                               $sql5 = "Select digicomm from $total_lec";
                               $chk5 = mysqli_query($con,$sql5);
                               while($row = mysqli_fetch_array($chk5))
                               {
                                   echo "<td>" . $row['digicomm'] ."</td>";//TOTAL Digital Communication LECTURE
                                   $sql6 = "Select count(Date) from $sub3 where roll_no=$r";
                                   $chk6 = mysqli_query($con,$sql6);
                                   while($row = mysqli_fetch_array($chk6))
                                     {
                                        $c2=$row['count(Date)'];
                                        echo "<td>" . $row['count(Date)'] ."</td>";//Antenna
                                        $sql7 = "Select antenna from $total_lec";
                                        $chk7 = mysqli_query($con,$sql7);
                                        while($row = mysqli_fetch_array($chk7))
                                        {
                                            echo "<td>" . $row['antenna'] ."</td>";//TOTAL Antenna LECTURE
                                        }
                                     }
                                   }
                            }
                        }
                    }
                       echo "</tr>";
            }                   
      echo "</table>";

    }
}       
 ?>
 </body>
 </html>