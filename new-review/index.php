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
    <script src="new-review.js"></script>
</head>

<body>
  <?php 
    include $_SERVER["DOCUMENT_ROOT"]."/Capstone/components/tools.php";
    include $_SERVER["DOCUMENT_ROOT"]."/Capstone/components/nav.php";
  ?>
  <div id="page-container">
      <div id="form-container">
          <h1>New Review</h1>
          <label>Advertisement Name</label>
          <input type="text" id="ad-name"/>
          <label>Drug Name</label>
          <input type="text" id="drug-name"/>

          <div class="radio-box">
            <label class="radio-name">Indication</label>
            <label><input type="radio" name="indication" value="1"><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="indication" value="0" checked><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Efficacy</label>
            <label><input type="radio" name="efficacy" value="1"><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="efficacy" value="0" checked><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Place</label>
            <label><input type="radio" name="place" value="1"><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="place" value="0" checked><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Dosing</label>
            <label><input type="radio" name="dosing" value="1"><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="dosing" value="0" checked><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Other Agents</label>
            <label><input type="radio" name="other-agents" value="1"><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="other-agents" value="0" checked><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Serious ADRs</label>
            <label><input type="radio" name="serious-adr" value="1"><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="serious-adr" value="0" checked><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Common ADRs</label>
            <label><input type="radio" name="common-adr" value="1"><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="common-adr" value="0" checked><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Monitoring</label>
            <label><input type="radio" name="monitoring" value="1"><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="monitoring" value="0" checked><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Interactions</label>
            <label><input type="radio" name="interactions" value="1"><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="interactions" value="0" checked><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Cost</label>
            <label><input type="radio" name="cost" value="1"><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="cost" value="0" checked><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Contraindication</label>
            <label><input type="radio" name="contraindication" value="1"><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="contraindication" value="0" checked><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Specific Populations</label>
            <label><input type="radio" name="specific-populations" value="1"><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="specific-populations" value="0" checked><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <label>Rating (Percent)</label>
          <input type="text" id="rating"/>

          <label>What they did right</label>
          <textarea rows="10" id="did-right"></textarea>

          <label>What they could improve</label>
          <textarea rows="10" id="could-improve"></textarea>

          <label>Ad URL (iSpot URL)</label>
          <input type="text" id="ad-url"/>

          <button id="submit">Add Review</button>
          <p id="error-message"></p>
      </div>
  </div>
</body>
</html>