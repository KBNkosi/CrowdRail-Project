<?php
require 'config.php';
$errors=[];

if ($_SERVER['REQUEST_METHOD']==="POST"){
    $u=trim($_POST["username"]);
    $e=trim($_POST["email"]);
    $p=$_POST["password"];

    if (!preg_match('/^\w{3,32}$/',$u))  $errors[]="Username 3-32 chars.";
    if (!filter_var($e, FILTER_VALIDATE_EMAIL)) $errors[]="Invalid email.";
    if(strlen($p)< 6) $errors="Password >= chars.";

    if(!$errors){
        $stmt=$pdo->prepare("SELECT COUNT(*) FROM users WHERE username=:u OR email=:e");
        $stmt->execute(["u"=>$u, "e"=>$e]);
        if($stmt->fetchColumn()){
            $errors[]="Username or email already exists.";
        }else{
            $stmt=$pdo->prepare(
                "INSERT INTO users (username, email, password) VALUES (:u,:e,:p)"
            );

            $stmt->execute([
                "u"=>$u,
                "e"=>$e,
                "p"=>password_hash($p, PASSWORD_DEFAULT)
            ]);
            header("Location: login.php?ok=1");
            exit;
        }
        
    }


}

$title="Register"; require "header.php";
?>

<h1>Register</h1>
<?php foreach ($errors as $e) echo "<div class='alert alert-danger'$e</div>";?>
<form method="POST" class="w-50">
 <div class="mb-3">
    <label class="form-label">Username</label>
    <input type="text" name="username" class="form-control" value="<?php esc($_POST["username"]?? "") ?>">

 </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" value="<?php esc($_POST["email"]?? "") ?>">
    
 </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control">
    
 </div>
 <button class="btn btn-primary">Create Account</button>

</form>
<?php require "footer.php";?>