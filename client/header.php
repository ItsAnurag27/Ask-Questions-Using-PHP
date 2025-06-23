<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$user = $_SESSION['user'] ?? null;
$username = $user['username'] ?? null;
$userId = $user['user_id'] ?? null;
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="./">
      <img src="../public/logo.png" alt="Logo" style="height: 40px;" />
    </a>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="./">Home</a>
        </li>

        <?php if ($username): ?>
          <li class="nav-item">
            <a class="nav-link" href="../server/requests.php?logout=true">
              Logout (<?php echo ucfirst(htmlspecialchars($username)); ?>)
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?ask=true">Ask A Question</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?u-id=<?php echo urlencode($userId); ?>">My Questions</a>
          </li>
        <?php else: ?>
          <li class="nav-item">
            <a class="nav-link" href="?login=true">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?signup=true">SignUp</a>
          </li>
        <?php endif; ?>

        <li class="nav-item">
          <a class="nav-link" href="?latest=true">Latest Questions</a>
        </li>
      </ul>
    </div>

    <form class="d-flex" action="" method="get">
      <input class="form-control me-2" name="search" type="search" placeholder="Search questions">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
