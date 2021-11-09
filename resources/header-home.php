<?php include "functions-header.php"?>
<header class="header-nav">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light ">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">BiblioTEC</a>
                <div class="nav nav-pills">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link <?=echoActiveClassIfRequestMatches("index")?>" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  <?=echoActiveClassIfRequestMatches("login")?>" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?=echoActiveClassIfRequestMatches("sing-in")?>" href="sing-in.php">Sing In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?=echoActiveClassIfRequestMatches("recover-password")?>" href="recover-password.php">Recover Password</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?=echoActiveClassIfRequestMatches("about-us")?>" href="about-us.php">About Us...</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>