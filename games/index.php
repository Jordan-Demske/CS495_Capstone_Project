<!doctype html>

<html lang="en">
<head>
    <title>Games - Building Better Drug Ads</title>

    <?php include "../components/header.php"; ?>

    <meta property="og:title" content="A Basic HTML5 Template">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.sitepoint.com/a-basic-html5-template/">
    <meta property="og:description" content="A simple HTML5 Template for new projects.">
    <meta property="og:image" content="image.png">

    <link rel="stylesheet" href="games.css">
</head>

<body>
    <?php
        include $_SERVER["DOCUMENT_ROOT"]."/Capstone/components/tools.php";
        include $_SERVER["DOCUMENT_ROOT"]."/Capstone/components/nav.php";  
    ?>

    <div id="page-container">
        <h1 id="page-title">Games</h1>
        <iframe src="../games_folder/game"></iframe>
    </div>

</body>
</html>