<!doctype html>

<html lang="en">
<head>
    <title>Login - Building Better Drug Ads</title>

    <?php include "../components/header.php"; ?>

    <meta property="og:title" content="Building Better Drug Ads">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Drug ad reviews">
    <meta property="og:image" content="/assets/images/logo.png">

    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
</head>

<body>
    <?php
        include "../components/tools.php";
        if(isset($_SESSION["username"])){
            $_SESSION["username"] = null;
        }
        include "../components/nav.php";
    ?>
    <div id="page-container">
        <div id="form-container">
            <h1>Log In</h1>
            <input id="username" type="text" name="username" placeholder="Username"/>
            <input id="password" type="password" name="password" placeholder="Password"/>
            <button id="submit">Log In</button>
            <p id="error-message"></p>
        </div>
    </div>
</body>
</html>