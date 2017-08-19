
<?php 
        include('connect.php');
       session_start(); 
       $_SESSION['user']="";
            $_SESSION['email']="";
            $_SESSION['login']=0;
            $_SESSION['register']=0;
            $_SESSION['error']=0;
      if(isset($_REQUEST['user'])&&isset($_REQUEST['pwd'])&& $_SERVER['REQUEST_METHOD']=='POST')
      {
      		
          

      	  $query="select name,passw,email from admin";
      	
      	  $result=mysql_query($query);
      	  while ($row=mysql_fetch_array($result))
      	   {
      	  	   if($row['name']==$_REQUEST['user']&&$row['passw']==$_REQUEST['pwd'])
      	  	   {
                    
                    $_SESSION['user']=$row['name'];
                    $_SESSION['email']=$row['email'];
                    $_SESSION['login']=1;
                    $_SESSION['error']=0;

      	  	   } 
      	   }
      }

   if(!$_SESSION['login'] && isset($_REQUEST['user']) && isset($_REQUEST['pwd']) )
   {
         $_SESSION['msg']="Incorrect Details";
         $_SESSION['error']=1;
    
   }
   else if(!$_SESSION['login'] && (!isset($_REQUEST['user'])) && (!isset($_REQUEST['pwd'])))
   {
   	     $_SESSION['msg']="";
   	     $_SESSION['error']=0;
   	  
   }
//echo $_SESSION['error']." ".$_SESSION['user']." ".$_SESSION['msg']." ".$_SESSION['login'];
   header('location:index.php');
   
      
?>