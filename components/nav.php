<nav>
    <div id="logo">
        <img src="/Capstone/assets/images/logo.png">
    </div>
    <ul id="nav-links">
        <li><a href="<?php echo $root;?>/">Home</a></li>
        <li><a href="<?php echo $root;?>/about">About</a></li>
        <?php
            if(isset($_SESSION["username"])){
                echo "<li><a href='".$root."/login'>Log Out</a></li>";
            }else{
                echo "<li><a href='".$root."/login'>Log In</a></li>";
            }
        ?>
</nav>