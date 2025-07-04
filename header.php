<?php require_once 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title ?? 'CrowdRail'; ?></title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-dark bg-dark mb-4">
       <div class="container">
         <a class="navbar-brand" href="/crowdrail/">CrowdRail</a>
         <div>
            <?php if(isLoggedIn()): ?>
                <a class="btn btn-outline-light btn-sm" href="dashboard.php">Dashboard</a>
                <a class="btn btn-outline-light btn-sm ms-2" href="logout.php">Logout</a>
            <?php else: ?>
                <a class="btn btn-outline-light btn-sm" href="login.php">Login</a>
                <a class="btn btn-light btn-sm ms-2" href="register.php">Register</a>
                <?php endif; ?>
         </div>
       </div>
    </nav>
</body>
</html>