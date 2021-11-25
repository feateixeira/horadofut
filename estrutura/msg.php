<?php
if (!empty($_SESSION['msg'])) {
?>
    <div class="alert alert-<?= $_SESSION['msgColor']?> alert-dismissible fade show" role="alert">
        <center><?= $_SESSION['msg'] ?></center>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
$_SESSION['msg'] = "";
$_SESSION['msgColor'] = "";?>