<!doctype html>

<html lang="en">
<head>
    <title>Login - Building Better Drug Ads</title>

    <?php include "../components/header.php"; ?>

    <meta property="og:title" content="A Basic HTML5 Template">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.sitepoint.com/a-basic-html5-template/">
    <meta property="og:description" content="A simple HTML5 Template for new projects.">
    <meta property="og:image" content="image.png">

    <link rel="stylesheet" href="new-review.css">
    <script src="login.js"></script>
</head>

<body>
  <?php 
    include $_SERVER["DOCUMENT_ROOT"]."/Capstone/components/tools.php";
    include $_SERVER["DOCUMENT_ROOT"]."/Capstone/components/nav.php";
  ?>
  <div id="page-container">
      <div id="form-container">
          <h1>New Review</h1>
          <input type="text" id="ad-name"/>
          <button id="submit">Add Review</button>
          <p id="error-message"></p>
      </div>
  </div>
</body>
</html>