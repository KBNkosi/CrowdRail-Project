<?php
require "config.php";
if (!isEditor()) { http_response_code(403); exit('Editors only'); }

# Handle approve / reject clicks
if (isset($_GET['action'], $_GET['id'])) {
  $stmt=$pdo->prepare('UPDATE sightings SET status=:s WHERE id=:id');
  $stmt->execute(['s'=>$_GET['action']=='approve'?'approved':'rejected','id'=>$_GET['id']]);
  header('Location: admin.php');
  exit;
}

$rows = $pdo->query('SELECT s.*, u.username
                     FROM sightings s JOIN users u ON u.id=s.user_id
                     ORDER BY s.created_at DESC')
            ->fetchAll(PDO::FETCH_ASSOC);

$title='Editor review'; require 'header.php';
?>

<h1>All submission</h1>
<table class="tale">
   <thead><tr><th>Title</th><th>User</th><th>Status</th><th>Date</th><th>Actions</th></tr></thead>
   <tbody>
    <?php foreach ($rows as $r): ?>
       <tr>
     <td><?= esc($r['title']) ?></td>
     <td><?= esc($r['username']) ?></td>
     <td><?= esc($r['status']) ?></td>
     <td><?= $r['created_at'] ?></td>
     <td>
       <?php if ($r['status']=='pending'): ?>
         <a class="btn btn-sm btn-success" href="?action=approve&id=<?= $r['id'] ?>">Approve</a>
         <a class="btn btn-sm btn-danger"  href="?action=reject&id=<?= $r['id'] ?>">Reject</a>
       <?php endif; ?>
     </td>
   </tr>
 <?php endforeach; ?> 
</tbody>
</table>
<?php require 'footer.php'; ?>