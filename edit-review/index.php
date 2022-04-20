<!doctype html>

<html lang="en">
<head>
    <title>Edit Review - Building Better Drug Ads</title>

    <?php include "../components/header.php"; ?>

    <meta property="og:title" content="Building Better Drug Ads">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Drug ad reviews">
    <meta property="og:image" content="/assets/images/logo.png">

    <link rel="stylesheet" href="edit-review.css">
    <script src="edit-review.js"></script>
</head>

<body>
  <?php 
    include "../components/tools.php";

    if(!isset($_GET["reviewID"])){
      die("Review not found");
    }

    if(isset($_SESSION["username"])){
      $id;$name;$indication;$efficacy;$place;$dosing;$other_agents;$serious_adrs;
      $common_adrs;$monitoring;$interactions;$cost;$contraindication;
      $specific_populations;$rating;$did_right;$could_improve;

      $mysqli = get_mysql_connection();

      if($mysqli == false){
        die("Failed to connect to database.");
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
            $ad_url = $row["ad_url"];
            $video_url = $row["video_url"];
          }
        } else {
          die("Review not found");
        }
      }

      mysqli_free_result($result);
      $mysqli->close();
    }else{
        die("You must be logged in to access this page.");
    }

    include "../components/nav.php";
  ?>
  <div id="page-container">
      <div id="form-container">

          <h1>Edit Review</h1>

          <input type="text" id="id" value="<?php echo $_GET["reviewID"] ?>" style="display:none"></input>

          <label>Advertisement Name</label>
          <input type="text" id="ad-name" value="<?php echo $ad_name ?>"/>
          <label>Drug Name</label>
          <input type="text" id="drug-name" value="<?php echo $drug_name ?>"/>

          <div class="radio-box">
            <label class="radio-name">Indication</label>
            <label><input type="radio" name="indication" value="1" <?php  echo ($indication == '1')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="indication" value="0" <?php  echo ($indication == '0')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Efficacy</label>
            <label><input type="radio" name="efficacy" value="1" <?php  echo ($efficacy == '1')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="efficacy" value="0" <?php  echo ($efficacy == '0')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Place</label>
            <label><input type="radio" name="place" value="1" <?php  echo ($place == '1')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="place" value="0" <?php  echo ($place == '0')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Dosing</label>
            <label><input type="radio" name="dosing" value="1" <?php  echo ($dosing == '1')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="dosing" value="0" <?php  echo ($dosing == '0')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Other Agents</label>
            <label><input type="radio" name="other-agents" value="1" <?php  echo ($other_agents == '1')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="other-agents" value="0" <?php  echo ($other_agents == '0')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Serious ADRs</label>
            <label><input type="radio" name="serious-adr" value="1" <?php  echo ($serious_adrs == '1')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="serious-adr" value="0" <?php  echo ($serious_adrs == '0')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Common ADRs</label>
            <label><input type="radio" name="common-adr" value="1" <?php  echo ($common_adrs == '1')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="common-adr" value="0" <?php  echo ($common_adrs == '0')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Monitoring</label>
            <label><input type="radio" name="monitoring" value="1" <?php  echo ($monitoring == '1')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="monitoring" value="0" <?php  echo ($monitoring == '0')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Interactions</label>
            <label><input type="radio" name="interactions" value="1" <?php  echo ($interactions == '1')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="interactions" value="0" <?php  echo ($interactions == '0')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Cost</label>
            <label><input type="radio" name="cost" value="1" <?php  echo ($cost == '1')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="cost" value="0" <?php  echo ($cost == '0')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Contraindication</label>
            <label><input type="radio" name="contraindication" value="1" <?php  echo ($contraindication == '1')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="contraindication" value="0" <?php  echo ($contraindication == '0')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <div class="radio-box">
            <label class="radio-name">Specific Populations</label>
            <label><input type="radio" name="specific-populations" value="1" <?php  echo ($specific_populations == '1')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/1.png" alt="1"></label>
            <label><input type="radio" name="specific-populations" value="0" <?php  echo ($specific_populations == '0')? "checked": "" ?>><img class="radio-icon" src="../assets/icons/0.png" alt="0"></label>
          </div>

          <label>Rating (Percent)</label>
          <input type="text" id="rating" value="<?php echo $rating ?>"/>

          <label>What they did right</label>
          <textarea rows="10" id="did-right"><?php echo $did_right ?></textarea>

          <label>What they could improve</label>
          <textarea rows="10" id="could-improve"><?php echo $could_improve ?></textarea>

          <label>Ad URL (iSpot URL)</label>
          <input type="text" id="ad-url" value="<?php echo $ad_url ?>"/>

          <label>Video URL (iSpot Share Link)</label>
          <input type="text" id="video-url" value="<?php echo $video_url ?>"/>

          <button id="submit">Submit Edit</button>
          <p id="error-message"></p>
      </div>
  </div>
</body>
</html>