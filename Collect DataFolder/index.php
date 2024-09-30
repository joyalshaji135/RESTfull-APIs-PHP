<?php

include('./config/connection.php');

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <title>Registration Form</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
</head>
<body>
   <!-- Container for the registration form -->
  <div class="container">
    <!-- Title of the form -->
    <div class="title">Registration Form</div>
    <hr>
    <div class="content">
      <!-- Registration form -->
      <form action="#" method="post">
        <div class="user-details">
          <!-- Input box for full name -->
          <div class="input-box">
            <span class="details">Student Full Name</span>
            <input type="text" placeholder="Student Full Name" name="s_name" required>
          </div>
          <!-- Input box for username -->
          <div class="input-box">
            <span class="details">Student Age</span>
            <input type="text" placeholder="Student Age" name="s_age" required>
          </div>
          <!-- Input box for email -->
          <div class="input-box">
            <span class="details">Student Email</span>
            <input type="text" placeholder="Student Email" name="s_email" required>
          </div>
          <!-- Input box for password -->
          <div class="input-box">
            <span class="details">Student Password</span>
            <input type="text" placeholder="Student Password" name="s_password" required>
          </div>
          <!-- Input box for confirming password -->
          <div class="input-box">
            <span class="details">Student City</span>
            <input type="text" placeholder="Student City" name="s_city" required>
          </div>
          <!-- Input box for date of birth -->
        </div>
        <!-- Button container -->
        <div class="button-container">
          <div class="button">
            <!-- Submit button -->
            <input type="submit" value="Register" name="s_submit">
          </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>

<?php

if(isset($_POST['s_submit'])){
    $s_name = $_POST['s_name'];
    $s_age = $_POST['s_age'];
    $s_email = $_POST['s_email'];
    $s_password = $_POST['s_password'];
    $s_city = $_POST['s_city'];


    if ($s_name == '' or $s_age == '' or $s_email == '' or $s_password == '' or $s_city == '') {
      
          echo "<script>alert('Fill the Blank Space..............')";
          echo "<script>window.open('./index.php','_self')</script>";
    }
    else
    {
      
      // insert into table_name (t_values1,t_values2,t_values3,......)  values ('i_values1','i_values2','i_values3'.....)
      $insert_query = "insert into student_details (s_name,s_age,s_email,s_password,s_city) values ('$s_name','$s_age','$s_email','$s_password','$s_city')";
      $insert_execute_query = mysqli_query($con,$insert_query);
      if ($insert_execute_query) {
          echo "<script>alert('Inserted Success')</script>";
          echo "<script>window.open('./index.php','_self')</script>";
      }
      else
      {
          die($insert_execute_query);
      }
    }

}


?>