<header class="logged-in">
    <div class="left-side">
        <!-- LEFT SIDE  -->
        <img class="company-logo" src="./public/css/logo.png" alt="Company's logo">
        <!-- TODO:href take us back to index -->
        <a href="index.php?action=showUserPage">DevShop</a>
        <!-- homebutton -->
    </div>

    <div class="right-side">
        <div class="search-bar-div">
            <!-- MIDDLE -->
            <input class="search-bar" type="search" name="input" id="input" placeholder="Search">
            <div id="results"></div>
            <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
        </div>
        <!-- RIGHT SIDE -->
        <div>
            <!-- <img class="user-profile-pic" src="" alt=""> -->
            <a class="log-btn" href="index.php?action=signInForm">Log In</a>
            <a class="sign-up-btn" href="index.php?action=add_user">Sign Up</a>
            <!-- <i class="fa-solid fa-user"></i> -->
        </div>
        <!-- nav bar? -->



    </div>
    <input type="checkbox" name="toggle" id="toggle">

    <label for="toggle" id="toggle">&#8942;</label>
    <nav class="dropdown-responsive">
        <ul class="drop-items">
            <a href="index.php?action=signInForm">
                <li>Log In</li>
            </a>
            <a href="index.php?action=add_user">
                <li>Sign Up</li>
            </a>
        </ul>
    </nav>


</header>