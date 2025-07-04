<?php
require "config.php";


$errors=[];
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $title=trim($_POST["title"]);
    $body=trim($_POST["body"]);
    $path=null;

    if ($title==="") $errors[]="Title required.";

    if($_FILES["media"]["name"] ?? false){
        $ext=strtolower(pathinfo($_FILES["media"]["name"], PATHINFO_EXTENSION ));

        if(!in_array($ext, ["jpg","jpeg","png","gif","mp4","mov"])){
            $errors[]="Bad file type.";
        } else{
            $path="uploads/".uniqid().".".$ext;
            move_uploaded_file($_FILES["media"]["tmp_name"], $path);

        }
    }

    if (!$errors) {
    $stmt = $pdo->prepare(
      'INSERT INTO sightings (user_id,title,body,media_path) 
       VALUES (:uid,:t,:b,:m)'
    );

     $stmt->execute([
      'uid'=>user()['id'],
      't'=>$title,
      'b'=>$body,
      'm'=>$path
    ]);
    header('Location: dashboard.php');
    exit;
  }

}
$title='New Sighting'; require 'header.php';
?>

<h1>Submit a train sighting / event</h1>
<?php foreach ($errors as $e) echo "<div class='alert alert-danger'>$e</div>"; ?>
<form  method="POST" enctype="multipart/form-data" class="w-50">
  <div class="mb-3">
    <label class="form-label">Title</label>
    <input name="title" class="form-control" value="<?= esc($_POST['title']??'') ?>">
  </div>
   <div class="mb-3">
    <label class="form-label">Description (optional)</label>
    <textarea name="body" rows="4" class="form-control"><?= esc($_POST['body']??'') ?></textarea>
  </div>
  <div class="mb-3">
    <label class="form-label">Image / Video</label>
    <input type="file" name="media" class="form-control">
  </div>
    <button class="btn btn-primary">Submit </button>
</form>
<?php require 'footer.php'; ?>