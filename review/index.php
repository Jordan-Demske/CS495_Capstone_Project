<!doctype html>

<html lang="en">
<head>
    <title>Review - Building Better Drug Ads</title>

    <?php include "../components/header.php"; ?>

    <meta property="og:title" content="A Basic HTML5 Template">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.sitepoint.com/a-basic-html5-template/">
    <meta property="og:description" content="A simple HTML5 Template for new projects.">
    <meta property="og:image" content="image.png">

    <link rel="stylesheet" href="review.css">
    <script src="review.js"></script>

</head>

<body>
  <?php
    include $_SERVER["DOCUMENT_ROOT"]."/Capstone/components/tools.php";
    include $_SERVER["DOCUMENT_ROOT"]."/Capstone/components/nav.php";

    $id;$name;$indication;$efficacy;$place;$dosing;$other_agents;$serious_adrs;
    $common_adrs;$monitoring;$interactions;$cost;$contraindication;
    $specific_populations;$rating;$did_right;$could_improve;

    $mysqli = get_mysql_connection();

    if($mysqli == false){
      print("Failed to connect to database.");
      exit();
    }

    if(isset($_GET["reviewID"])){
      $review = $_GET["reviewID"];
      $sql = "SELECT * FROM reviews WHERE id = '$review'";

      $result = $mysqli->query($sql);
        
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $id = $row["id"];
          $ad_name = $row["ad_name"];
          $drug_name = $row["drug_name"];
          $indication = $row["score_indication"];
          $efficacy = $row["score_efficacy"];
          $place = $row["score_place"];
          $dosing = $row["score_dosing"];
          $other_agents = $row["score_other_agents"];
          $serious_adrs = $row["score_serious_adrs"];
          $common_adrs = $row["score_common_adrs"];
          $monitoring = $row["score_monitoring"];
          $interactions = $row["score_interactions"];
          $cost = $row["score_cost"];
          $contraindication = $row["score_contraindication"];
          $specific_populations = $row["score_specific_populations"];
          $rating = $row["score_rating"];
          $did_right = $row["did_right"];
          $could_improve = $row["could_improve"];
          $video_url = $row["video_url"];
        }
      } else {
        printf('No record found.<br />');
      }
    }

    mysqli_free_result($result);
    $mysqli->close();
  ?>

  <div id="page-container">
    <div id="main-container">
      <input type="text" id="id" value="<?php echo $id ?>" style="display:none"/>
      <h1 id="name">"<?php echo $ad_name ?>" Review</h1>
      <h4 id="drug-name">Drug: <span style="text-decoration:underline"><?php echo $drug_name ?></span></h4>
      <div id="info">
        <iframe id='result-video' scrolling='no' src='<?php echo $video_url ?>' onload="resizeIframe()"></iframe>
        <div id="results">
          <div class="result-cell">
            <p>Indication</p>
            <img src="../assets/icons/<?php echo $indication ?>.png"/>
          </div>
          <div class="result-cell">
            <p>Efficacy</p>
            <img src="../assets/icons/<?php echo $efficacy ?>.png"/>
          </div>
          <div class="result-cell">
            <p>Place</p>
            <p><img src="../assets/icons/<?php echo $place ?>.png"/>
          </div>
          <div class="result-cell">
            <p>Dosing</p>
            <img src="../assets/icons/<?php echo $dosing ?>.png"/>
          </div>
          <div class="result-cell">
            <p>Other Agents</p>
            <img src="../assets/icons/<?php echo $other_agents ?>.png"/>
          </div>
          <div class="result-cell">
            <p>Serious ADRs</p>
            <img src="../assets/icons/<?php echo $serious_adrs ?>.png"/>
          </div>
          <div class="result-cell">
            <p>Common ADRs</p>
            <img src="../assets/icons/<?php echo $common_adrs ?>.png"/>
          </div>
          <div class="result-cell">
            <p>Monitoring</p>
            <img src="../assets/icons/<?php echo $monitoring ?>.png"/>
          </div>
          <div class="result-cell">
            <p>Interactions</p>
            <img src="../assets/icons/<?php echo $interactions ?>.png"/>
          </div>
          <div class="result-cell">
            <p>Cost</p>
            <img src="../assets/icons/<?php echo $cost ?>.png"/>
          </div>
          <div class="result-cell">
            <p>Contraindication</p>
            <img src="../assets/icons/<?php echo $contraindication ?>.png"/>
          </div>
          <div class="result-cell">
            <p>Specific Populations</p>
            <img src="../assets/icons/<?php echo $specific_populations ?>.png"/>
          </div>
        </div>
        <div id="rating">
          <p>Rating: <span style="color: #006bb3; font-weight:bolder"><?php echo $rating ?>%</span></p>
        </div>

        <div id="did-right-container">
          <h3>What the Ad did right...</h3>
          <p id="did-right"><?php echo $did_right ?></p>
        </div>

        <div id="could-improve-container">
          <h3>How the Ad could improve...</h3>
          <p id="could-improve"><?php echo $could_improve ?></p>
        </div>

        <?php
          if(isset($_SESSION["username"])){
            echo "<a href='".$root."/edit-review?reviewID=".$id."'><button id='edit-btn'>Edit Review</button></a>";
            echo "<button id='delete-btn'>Delete Review</button>";
          }
        ?>
      </div>
    </div>
  </div>
</body>
</html>