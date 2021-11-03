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

    <link rel="stylesheet" href="review.css">

</head>

<body>
  <?php
    include $_SERVER["DOCUMENT_ROOT"]."/Capstone/components/nav.php";
    include $_SERVER["DOCUMENT_ROOT"]."/Capstone/components/tools.php";

    $id;$name;$indication;$efficacy;$place;$dosing;$other_agents;$serious_adrs;
    $common_adrs;$monitoring;$interactions;$cost;$contraindication;
    $specific_populations;$rating;$did_right;$could_improve;

    $mysqli = get_mysql_connection();

    if($mysqli == false){
      print("Failed to connect to database.");
      exit();
    }

    $sql = "SELECT * FROM reviews";

    $result = $mysqli->query($sql);
      
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $id = $row["id"];
        $name = $row["name"];
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
      }
    } else {
      printf('No record found.<br />');
    }
    mysqli_free_result($result);
    $mysqli->close();
  ?>

  <div id="page-container">
    <div id="sidebar-left-container">
      <h1>Sidebar Left</h1>
    </div>
    <div id="main-container">
      <h1 id="name"><?php echo $name ?> Review</h1>
      <div id="info">
        <table id="results-table">
          <tr>
            <td>Indication</td>
            <td>Efficacy</td>
            <td>Place</td>
            <td>Dosing</td>
            <td>Other Agents</td>
            <td>Serious ADRs</td>
            <td>Common ADRs</td>
            <td>Monitoring</td>
            <td>Interactions</td>
            <td>Cost</td>
            <td>Contraindication</td>
            <td>Specific Populations</td>
            <td>Rating</td>
          </tr>
          <tr>
            <td><img src="../assets/icons/<?php echo $indication ?>.png"/></td>
            <td><img src="../assets/icons/<?php echo $efficacy ?>.png"/></td>
            <td><img src="../assets/icons/<?php echo $place ?>.png"/></td>
            <td><img src="../assets/icons/<?php echo $dosing ?>.png"/></td>
            <td><img src="../assets/icons/<?php echo $other_agents ?>.png"/></td>
            <td><img src="../assets/icons/<?php echo $serious_adrs ?>.png"/></td>
            <td><img src="../assets/icons/<?php echo $common_adrs ?>.png"/></td>
            <td><img src="../assets/icons/<?php echo $monitoring ?>.png"/></td>
            <td><img src="../assets/icons/<?php echo $interactions ?>.png"/></td>
            <td><img src="../assets/icons/<?php echo $cost ?>.png"/></td>
            <td><img src="../assets/icons/<?php echo $contraindication ?>.png"/></td>
            <td><img src="../assets/icons/<?php echo $specific_populations ?>.png"/></td>
            <td><?php echo $rating ?>%</td>
          </tr>
        </table>

        <p id="did_right"><?php echo $did_right ?></p>
        <p id="could_improve"><?php echo $could_improve ?></p>
      </div>
    </div>
    <div id="sidebar-right-container">
    <h1>Sidebar Right</h1>
    </div>
  </div>
</body>
</html>