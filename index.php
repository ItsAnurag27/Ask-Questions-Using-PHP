<!DOCTYPE html>
<html lang="en">

<head>
    <title>Discuss Project</title>
    <?php include('./client/commonFiles.php') ?>
</head>

<body>
    <?php
    session_start();
    include('./client/header.php');

    $user = $_SESSION['user']['username'] ?? null;

    // Use null coalescing operator to avoid undefined key warnings
    $signup  = $_GET['signup']  ?? null;
    $login   = $_GET['login']   ?? null;
    $ask     = $_GET['ask']     ?? null;
    $qid     = $_GET['q-id']    ?? null;
    $cid     = $_GET['c-id']    ?? null;
    $uid     = $_GET['u-id']    ?? null;
    $latest  = $_GET['latest']  ?? null;
    $search  = $_GET['search']  ?? null;

    if ($signup && !$user) {
        include('./client/signup.php');

    } else if ($login && !$user) {
        include('./client/login.php');

    } else if ($ask) {
        include('./client/ask.php');

    } else if ($qid) {
        include('./client/question-details.php');

    } else if ($cid || $uid || $latest || $search) {
        include('./client/questions.php');

    } else {
        include('./client/questions.php');
    }
    ?>
</body>

</html>
