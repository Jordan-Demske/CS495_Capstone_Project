<!doctype html>

<html lang="en">
<head>
    <title>Games - Building Better Drug Ads</title>

    <?php include "../components/header.php"; ?>

    <meta property="og:title" content="Building Better Drug Ads">
    <meta property="og:type" content="website">
    <meta property="og:description" content="Drug ad reviews">
    <meta property="og:image" content="/assets/images/logo.png">

    <link rel="stylesheet" href="games.css">
</head>

<body>
    <?php
        include "../components/tools.php";
        include "../components/nav.php";  
    ?>

    <div id="page-container">

        <div class="game">
            <h1 class="game-title">Unintended Consequences</h1>
            <p class="game-desc">This games focus is to educate users how the lack of information surrounding drugs can lead to unintended consequences. It specifically references the consequences of drinking while taking medication, such as Ibuprofen.</p>
            <iframe src="../games_folder/game"></iframe>
        </div>

        <div class="game">
            <h1 class="game-title">CHS Game</h1>
            <p class="game-desc">This game is meant to educate users about Cannabinoid Hyperemesis Syndrome (CHS). Millions of Americans suffer from CHS each year. It occurs in some people due to long-term cannabis use.
            </p>
            <iframe src="../games_folder/game2"></iframe>
            <p class="game-desc">
                Credits:
                Roboto Mono (https://fonts.google.com/specimen/Roboto+Mono?query=roboto), licensed under Apache 2.0 (https://www.apache.org/licenses/LICENSE-2.0)
            </p>
            <p class="game-desc">
                MarlonHJ's ENGINE.WAV (https://freesound.org/people/MarlonHJ/sounds/242740/), licensed under CC0 1.0 Universal (https://creativecommons.org/publicdomain/zero/1.0/)
            </p>
        </div>

    </div>

</body>
</html>
