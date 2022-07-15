<?php include 'dbcon.php';?>

<?php
if(isset($_POST['user']))
{

$user = $_POST['user'];
$pass = $_POST['pass'];

$suser = stripcslashes($user);
$spass = stripcslashes($pass);
$euser = mysqli_real_escape_string($conn, $suser);
$epass = mysqli_real_escape_string($conn, $spass);

$sql = "SELECT * FROM tbladmin WHERE user = '".$user."' AND pass='".$pass."' limit 1";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);
$count = mysqli_num_rows($result);

if($count == 1)
{
    echo "<script>alert('Login Successfully!');window.location.href='admin.php';</script>";
}
else
{
    echo "<script>alert('Login Failed');history.go(-1);</script>";    
    die();
}
}
?>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="../css/login.css" rel="stylesheet">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../images/user.png" id="icon" alt="User Icon" height="20%", width="100%"/>
    </div>

    <!-- Login Form -->
    <form method="POST" action="#">
      <input type="text" id="user" class="fadeIn second" name="user" placeholder="username" required>
      <input type="password" id="pass" class="fadeIn third" name="pass" placeholder="password" required>
      <input type="submit" class="fadeIn fourth" value="Log In" name="Login">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" onclick="Forgot()">Forgot Password?</a>
    </div>

  </div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function Forgot(){
        Swal.fire(
        'Forgot the password?',
        'Please contact administration',
        'question'
)
    }
</script>