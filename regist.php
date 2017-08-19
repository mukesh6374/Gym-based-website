<?php
  include'connect.php';
    session_start();
    $_SESSION['user']="";
    $_SESSION['email']="";
    $_SESSION['msg']="";
    $_SESSION['error']=0;
    $_SESSION['register']=0;
    //echo $_SESSION['error']." "."hello".$_SESSION['msg'];

      $flag=0;
      $flag1=0;
      
      if(isset($_REQUEST['user'])&&isset($_REQUEST['pwd'])&&$_SERVER['REQUEST_METHOD']=='POST')
      {
             $query="select name,passw,email from admin";
             $result=mysql_query($query);
             while($row=mysql_fetch_array($result))
             {
                   if($row['name']==$_REQUEST['user'])
                           {    
                                 $flag=1;
                                 if($row['email']==$_REQUEST['email'])
                                          $flag1=1;


                           }
                    else if($row['email']==$_REQUEST['email'])
                    {
                        $flag1=1;
                         if($row['name']==$_REQUEST['user'])
                         {
                           $flag=1;
                         }
                    }

                     
         
             }
      
      }

    if($flag&&isset($_REQUEST['user']))
   {
          $_SESSION['msg']="Already exists";
          $_SESSION['error']=2;
          $_SESSION['register']=2;

   }
   if($flag1&&isset($_REQUEST['email']))
   {
          $_SESSION['msg']="Already exists";
          $_SESSION['error']=2;
          $_SESSION['register']=2;
   }
      

   if((!$flag)&&(!$flag1)&&($_SERVER['REQUEST_METHOD']=='POST')&&isset($_REQUEST['user'])&&isset($_REQUEST['email']))
   {  

      $u=$_REQUEST['user'];
      $e=$_REQUEST['email'];
      $p=$_REQUEST['pwd'];

         $query="insert into admin (`name`, `email`, `passw`) values('$u','$e','$p')";

         mysql_query($query);
         mysql_close($con);



         //echo $query;

        //  session_unset();
        // session_destroy(); 


        $_SESSION['msg']="Registered!";
        $_SESSION['register']=1;


    }

  // echo $_SESSION['error']." ".$_SESSION['register']."hello".$_SESSION['msg'];
    header('location:index.php');
      ?>