<?php
require "config.php";
if (!isLoggedIn()) {header("Location: login.php"); exit;}

$stmt=$pdo->prepare(
    "SELECT * FROM sightings WHERE user_id=:id  ORDER BY created_at DESC"
);

$stmt->execute(["id"=>user()["id"]]);
$mine = $stmt->fetchAll(PDO::FETCH_ASSOC);

$title='Dashboard'; require 'header.php';
?>

<h1>Hello, <?= esc(user()['username']) ?></h1>
<a class="btn btn-success mb-3" href="submit.php">+ New Sighting</a>

<?php if (!$mine): ?>
  <p>No submissions yet.</p> 
<?php else: ?>
    <table class="table">
     <thead><tr><th>Title</th><th>Status</th><th>Date</th></tr></thead>
     <tbody>
         <?php foreach ($mine as $s): ?>
            <tr>
      <td><?= esc($s['title']) ?></td>
      <td><?= esc($s['status']) ?></td>
      <td><?= esc($s['created_at']) ?></td>
    </tr>
    <?php endforeach;?>
     </tbody>
    </table>
    <?php endif;?>
    <?php require "footer.php"; ?>

    