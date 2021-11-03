<!doctype html>

<html lang="en">
<head>
    <title>Building Better Drug Ads</title>

    <?php include "./components/header.php"; ?>

    <meta property="og:title" content="A Basic HTML5 Template">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.sitepoint.com/a-basic-html5-template/">
    <meta property="og:description" content="A simple HTML5 Template for new projects.">
    <meta property="og:image" content="image.png">

    <link rel="stylesheet" href="index.css">

    <script src="index.js"></script>
</head>

<body>

    <?php include $_SERVER["DOCUMENT_ROOT"]."/Capstone/components/nav.php";?>
    
    <div id="search-area">
        <input id="search-bar" type="text" name="search"/>
        <button id="search-btn">Search</button>
    </div>

    <div id="page-container">
        <div id="sidebar-left-container">
            <h1>Sidebar Left</h1>
        </div>

        <div id="main-container"></div>

        <div id="sidebar-right-container">
            <h1>Sidebar Right</h1>
        </div>
    </div>
</body>
</html>