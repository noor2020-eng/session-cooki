<?php

  //sessions
   session_start();
   if(isset($_POST['submit'])){
     //cookie for Gender\Gender
     setcookie('gender', $_POST['gender'], time() + 86400);


     $_SESSION['name'] = $_POST['name'];
     header('location: index.php');
   }


 ?>


 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>php tuts</title>
   </head>
   <body>
     <!--  form go to current page -->
      <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="text" name="name" value="">
        <select class="" name="gender">
          <option value="female">female</option>
          <option value="male">male</option>
        </select>
        <input type="submit" name="submit" value="submit">
      </form>
   </body>
 </html>
