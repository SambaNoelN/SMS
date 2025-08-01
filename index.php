<?php

session_start();
if (isset($_SESSION['errors'])) {
  $errors = $_SESSION['errors'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register & Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="style.css">
  <style>
        *{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:"poppins",sans-serif;
}
body{
    * background-color: #c9d6ff;
    background:linear-gradient(to right,#e2e2e2,#c9d6ff); */
    /*background:white;*/
}
.container{
    background:#fff;
    width:450px;
    padding:1.5rem;
    margin:50px auto;
    border-radius:10px;
    box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.6);
}
form{
    margin:0 2rem;
}
.form-title{
    font-size:1.5rem;
    font-weight:700;
    text-align:center;
    padding:1.3rem;
    margin-bottom:0.4rem;
}
input{
    flex:10;
    color:inherit;
    width:100%;
    background-color:transparent;
    border:none;
    font-size:15px;
    padding:0 0.4em;
    border-left:solid 1px hsla(0, 0%, 0%, 0.4)
}
input:focus{
    border-left:solid 1px hsla(240, 73%, 71%, 1);

}
.input-group{
    padding:1% 0;
    position:relative;
   background-color:hsla(227, 63%, 18%, 0.07);
margin:1em auto;
border-radius:12px;
display:flex;
padding:0.7em 0.1em;

}
.error{
    position:absolute;
    left:2em;
    bottom:-1em;
}
.error p{
    color:red;
    font-weight:500;
    text-align:center;
    font-size:14px;
}
.input-group:focus-within{
    border:1.5px solid rgb(125,125,235);

}
.input-group i{
    flex:1;
    color:black;
    display:flex;
    justify-content:center;
    align-items:center;
}
.input-group:focus-within i{
    color:rgb(125,125,235);
}
.input-group.password i:first-child{
    flex:1.1;
}
input:focus{
    outline:none;
}

.recover{
    text-align:right;
    font-size:1rem;
    margin-bottom:1rem;

}
.recover a{
    text-decoration:none;
    color:rgb(125,125,235);
}
.recover a:hover{
    color:blue;
    text-decoration:underline;
}
.btn{
    font-size:1.1rem;
    padding:0.6em 0;
    border-radius:10px;
    outline:none;
    border:none;
    width:100%;
    background:rgb(125,125,235);
    color:black;
    cursor:pointer;
    transition:0.9s;
    margin-top:0.4em;
    font-weight:600;
}
.btn:hover{
    background:#07001f;
    color:white;
}
.or{
    font-size:1.1rem;
    margin-top:1rem;
    margin-bottom:1rem;
    text-align:center;
}
.icons{
    text-align:center;
}
.icons i{
    color:rgb(125,125,235);
    padding:0.8rem 1.5rem;
    border-radius:10px;
    font-size:1.5rem;
    cursor:pointer;
    border:2px solid #dfe9f5;
    margin:0 15px;
    transition:1s;
}
.icons i:hover{
    background:#07001f;
    font-size:1.6rem;
    border:2px solid rgb(125,125,235);
}
.links{
    display:flex;
    justify-content:space-around;
    padding:0 4rem;
    margin-top:0.9rem;
    font-weight:bold;
}
button{
    color:rgb(125,125,235);
    border:none;
    background-color:transparent;
    font-size:1rem;
    font-weight:bold;
}
button:hover{
    text-decoration:underline;
    color:blue;
}
.error-main{
background-color:brown;
padding:0.5em 1em;
border-radius:12px;
width:80%;
margin:0 auto;
}
.error-main p{
color:white;
text-align:center;
}
.user-details{
    margin-top:5em;
    font-size:1.5em;
    font-weight:400;
}
.user-details p{
    margin-bottom:0.5em;
    text-align:center;
}
.user-details p:first-child{
    text-decoration:underline;
    margin-bottom:2em;
    font-weight:600;
}
.user-details a{
    display: block; 
    text-align: center; 
    text-decoration-color:rgb(125,125,235);
    color:rgb(125,125,235);
    transition:5ms;
}
.user-details a:hover{
color:blue;
text-decoration-color:blue;
}
@media screen and (max-width: 767px) {
.container{
    box-shadow:unset;
}
}
    </style>
</head>

<body>

  <div class="container" id="signIn">
    <h1 class="form-title">Sign In</h1>
    <?php
    if (isset($errors['login'])) {
      echo '<div class="error-main">
                    <p>' . $errors['login'] . '</p>
                    </div>';
      unset($errors['login']);
    }
    ?>
    <form method="POST" action="user-account.php">
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <?php
        if (isset($errors['email'])) {
          echo ' <div class="error">
                    <p>' . $errors['email'] . '</p>
                </div>';
        }
        ?>
      </div>
      <div class="input-group password">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" id="password" placeholder="Password" required>
        <i id="eye" class="fa fa-eye"></i>
        <?php
        if (isset($errors['password'])) {
          echo ' <div class="error">
                    <p>' . $errors['password'] . '</p>
                </div>';
        }
        ?>
      </div>
      <p class="recover">
        <a href="#">Recover Password</a>
      </p>
      <input type="submit" class="btn" value="Sign In" name="signin">
    </form>
    <p class="or">
      ----------or--------
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
      <p>Don't have account yet?</p>
      <a href="register.php">Sign Up</a>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>
<?php
if (isset($_SESSION['errors'])) {
  unset($_SESSION['errors']);
}
?>