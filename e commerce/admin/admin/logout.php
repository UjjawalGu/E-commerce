<?php
session_start();
session_unset();
session_destroy();
header('Location: ../admin/login/login.php');
exit;
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../admin/login/login.php');

    exit;
}

?>
<form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" action="logout.php" method="POST">
    <button type="submit" class="btn text-danger" name="logout">Logout</button>
</form>