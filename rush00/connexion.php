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
        <h1>Connexion</h1>
        <form action="user.php" method="POST">
            <input type="text" name="email" placeholder="Ton email" class="" value="">
            <input type="pwd" name="pwd" placeholder="Ton mot de passe" class="">
            <button type="submit" class="btn btn-default">S'identifier</button>
            <input type="hidden" name="from" value="login">
            <input type="hidden" name="success" value="index">
            <p>Tu n'est pas encore inscrit ? <a href="register.php" style="color: #000;">Inscris toi</a></p>
        </form>
    </div>