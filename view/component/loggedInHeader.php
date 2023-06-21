<header class="logged-in">
    <!-- TODO:place logo here. -->
    <div class="left-side">
        <!-- TODO: add logo  -->
        <img class="company-logo" src="" alt="">
        <!-- TODO:href take us back to index -->
        <a href="index.php">Home</a>
        <!-- homebutton -->
    </div>

    <div class="search-bar-div">
        <input class="search-bar" type="search" name="" id="">
        <i class="fa-solid fa-magnifying-glass"></i>
    </div>

    <div class="right-side">
        <!-- TODO:users can click on profile pic to take them to their profile -->
        <img class="user-profile-pic" src="" alt="">
        <!-- TODO:  add the index.php?action=""id="php user id here" -->
        <?php if (isset($_SESSION)) { ?>
            <a href="index.php?action=editUser">Edit Profile</a>
            <a class="log-out-btn" href="index.php?action=logOut">Log Out</a>
        <?php
        } ?>
        <i class="fa-solid fa-user"></i>
    </div>
    <!-- nav bar? -->
</header>