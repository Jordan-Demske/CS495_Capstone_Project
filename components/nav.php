<nav>
    <div id="logo">
        <img src="/assets/images/logo.png">
    </div>
    <ul id="nav-links">
        <li><a href="/">Home</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/games">Games</a></li>
        <?php
            if(isset($_SESSION["username"])){
                echo "<li><a href='/new-review'>Add Review</a></li>";
                echo "<li><a href='/login'>Log Out</a></li>";
            }else{
                echo "<li><a href='/login'>Log In</a></li>";
            }
        ?>
    </ul>
    <div id="mobileNav">
        <img src="/assets/icons/menu-icon.svg"/>
    </div>
</nav>