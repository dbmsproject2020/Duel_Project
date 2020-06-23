<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>
Duel Wallet!
</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<style type="text/css">
        body{ font: 14px sans-serif;background: url(Background.jpg) repeat 0 0; }
        .wrapper{ width: 350px; margin-left:auto ; margin-right: auto; margin-top:100px  ;  background-color:#ffffff ; text-align:center;
            padding-top:0px; }
        .top{font:72px monospace; margin-left:auto; margin-right:auto; margin-top:10px;text-align:center;padding-bottom:0px;height:50px;}
    </style>
</head>
<body>
<div class="top">Duel</div>
<div class="wrapper">
Your Current Balance is: <br>
<div class="balance">
<?php echo "$123" ?>
</div>
<br>
<hr>
<p>
<a href="addmoney.php" class="btn btn-warning">Add Money</a>
 <a href="redeem.php" class="btn btn-danger">Redeem</a>
</p>
</div>
</body>
</html>