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

    <?php
        include $_SERVER["DOCUMENT_ROOT"]."/Capstone/components/tools.php";
        include $_SERVER["DOCUMENT_ROOT"]."/Capstone/components/nav.php";  
    ?>

    <div id="fullscreen">
        <div id="overlay"></div>
        <div id="message">
            <h1>The Problem with Drug Ads.</h1>
            <p>Drug advertisements are incomplete and do not give enough information on what a person needs to know in order to ask their doctor. At a minimum a drug company should give the percent of an adverse drug reaction, percent success in treating a disease, eliminate jargon and explain its place in therapy.</p>
        </div>
        <div id="scroll-button">
            <p>Reviews</p>
            <img src="assets/images/arrow.svg">
        </div>
    </div>
    
    <div id="search-area">
        <input id="search-bar" type="text" name="search" placeholder="Search reviews..."/>
        <button id="search-btn">
            <span id="search_text">Search</span>
        </button>
    </div>

    <div id="page-container">
        <div id="sidebar-left-container">
            <h1>Sidebar Left</h1>
        </div>

        <div id="main"><div id="main-container"></div></div>

        <div id="sidebar-right-container">
            <h1>Sidebar Right</h1>
        </div>
    </div>
</body>
</html>