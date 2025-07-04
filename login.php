<?php
require "config.php";
$errors=[];

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $u=$_POST["username"];
    $p=$_POST["password"];

    $stmt=$pdo->prepare("SELECT * FROM users WHERE username=:u");
    $stmt->execute(["u"=>$u]);
    $user=$stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($p, $user["password"])){
        $_SESSION["user"]=$user;
        header("Location: dashboard.php");
        exit;

    } else{
        $errors[]="Invalid credentials.";
    }
}

$title="Login";require "header.php";
?>

<h1>Login</h1>
<?php if(isset($_GET["ok"])): ?>
    <div class="alert alert-success">Registration successful. Please log in.</div>
    <?php endif; ?>
    <?php foreach($errors as $e) echo "<div class='alert alert-danger'>$e</div>";?>
    <form method="POST" class="w-50">
      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" name="username" class="form-control">
      </div>
      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" name="password" class="form-control">
      </div>
      <button class="btn btn-primary">Login</button>
    </form>
    <?php require "footer.php";?>