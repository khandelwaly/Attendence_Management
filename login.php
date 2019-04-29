<?php
include_once("connection.php");
if(isset($_POST['submit']))
{
    $uname=$_POST['usrnm'];
    $password=$_POST['pasn'];
    //$sql1 = "insert into loginform(USER,PASS) values('$uname','$password')";
      if($uname=="admin"&&$password=="admin")
        {      
          $sql="select * from login where admin_name='".$uname."'AND pass='".$password."' limit 1";
          $result = mysqli_query($con,$sql);
          if(mysqli_num_rows($result)==1)
          { 
           echo "You Have Successfully Logged in";
           header("Location:criteria_admin.html");
          }
         else
          {
           echo "You Have Entered Incorrect Password";
           return false;
          }
        }
     if($uname=="teacher"&&$password=="teacher")
        {      
           $sql="select * from teacher where teacher_name='".$uname."'AND pass='".$password."' limit 1";
           $result = mysqli_query($con,$sql);
           if(mysqli_num_rows($result)==1)
            {
              echo "You Have Successfully Logged in";
              header("Location:criteria.html");
            }
           /*else
           {
            $message2="Invalid Password or username";
            //$message = "wrong answer";
            echo "<script type='text/javascript'>alert('$message2');window.location.href = 'Login.html';</script>";
           }*/
        }
        else
           {
            $message2="Invalid Password or username";
            //$message = "wrong answer";
            echo "<script type='text/javascript'>alert('$message2');window.location.href = 'Login.html';</script>";
           }
  
        //$chk = mysqli_query($con,$sql1);
    //if($chk=true)
    //{
     //   echo "data inserted";
    
}
?>