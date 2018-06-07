<?php
    session_start();

    if (isset($_SESSION['email']) && !empty($_SESSION['email'])) {
        header('Location: index.php');
        exit();
    }

    include('header.php');
?>
<body class="small">
    <div class="reg-log">
        <div class="circle"></div>
        <h1>Inscription</h1>
        <form action="user.php" method="POST">
            <input type="text" name="email" placeholder="Ton email" value="" class="<?php echo isset($_GET['email']) ? 'error' : '' ; ?>">
            <input type="pwd" name="pwd" placeholder="Ton mot de passe" class="<?php echo isset($_GET['pwd']) ? 'error' : '' ; ?>">
            <input type="pwd" name="pwd2" placeholder="Retape ton mot de passe" class="<?php echo isset($_GET['pwd']) ? 'error' : '' ; ?>">
            <input type="text" name="prenom" placeholder="Ton prenom" class="<?php echo isset($_GET['prenom']) ? 'error' : '' ; ?>">
            <input type="text" name="nom" placeholder="Ton nom" class="<?php echo isset($_GET['nom']) ? 'error' : '' ; ?>">
            <input type="text" name="address" placeholder="Ton adresse" class="<?php echo isset($_GET['address']) ? 'error' : '' ; ?>">
            <button type="submit" class="btn btn-default">Inscription</button>
            <input type="hidden" name="from" value="register">
            <input type="hidden" name="success" value="login">
            <p>Tu est déjà inscrit ? <a href="connexion.php" style="color: #000;">Connecte toi</a></p>
        </form>
    </div>