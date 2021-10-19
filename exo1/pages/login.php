<?php $msg = '' ?>
<div class="container mt-4 text-center justify-content-center">
    <?php   
        if(!empty($msg)){
            echo "<p class=\"alert alert-danger\">$msg</p>";    
        }
    ?>
    <form action="" method="post">
        <div class="form-group"><input type="text" name="USERNAME" placeholder="Nom d'utilisateur"></div>
        <div class="form-group"><input type="text" name="PASSWORD" placeholder="Mot de Passe"></div>
        <div class="form-group"><input type="submit" value="Se Connecter"></div>
    </form>
</div>

<?php
    if(!empty($_POST)){
        $msg = '';
        if($_POST['USERNAME'] === $username && $_POST['PASSWORD'] === $password){
            $_SESSION['username'] = $_POST['USERNAME'];
            $_SESSION['password'] = $_POST['PASSWORD'];
            header('Location: index?page=home');
        }
        else $msg = "Mauvais mot de passe ou nom d'utilisateur";
    }
?>
