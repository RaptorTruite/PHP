<?php
if (!empty($_GET['page'])) {
    $page = $_GET['page'];
} else $page = 'login'
?>

<?php include 'includes/header.php' ?>
<?php include 'pages/' . $page . '.php' ?>
<?php include 'includes/footer.php' ?>