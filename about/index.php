<!doctype html>

<html lang="en">
<head>
    <title>About - Building Better Drug Ads</title>

    <?php include "../components/header.php"; ?>

    <meta property="og:title" content="A Basic HTML5 Template">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.sitepoint.com/a-basic-html5-template/">
    <meta property="og:description" content="A simple HTML5 Template for new projects.">
    <meta property="og:image" content="image.png">

    <link rel="stylesheet" href="about.css">

</head>

<body>
  <?php
    include $_SERVER["DOCUMENT_ROOT"]."/Capstone/components/tools.php";
    include $_SERVER["DOCUMENT_ROOT"]."/Capstone/components/nav.php";
  ?>

  <div id="page-container">

    <div id="main-container">
      <h1 id="title">About Pharmacist Bob Gold</h1>
      <p class="info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      
      <p class="info">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>

    <div id="sidebar">
      <img id="headshot" src="../assets/images/Gold_Headshot.jpg"/>
      <h2 id="links-header">Links</h2>
      <ul id="links">
        <li><a href="">Book</a></li>
        <li><a href="">News Article</a></li>
        <li><a href="">LinkedIn</a></li>
        <li><a href="">Other</a></li>
      </ul>
    </div>

  </div>
</body>
</html>