<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title><?= $title; ?></title>
    <link href="./public/css/main.css" rel="stylesheet" />
    <script src="./public/js/nyan.js"></script>

</head>

<body>
    <!-- CAN VIEW :::
  MAIN PAGE // OPENING PAGE // OVERALL CARD PAGES (SAME THING THAT LOGGED IN USERS CAN SEE)
  LOGIN IN PAGE
  SIGN UP PAGE
  INDIVIDUAL CARDS
  PROFILES
    -->

    <!-- TODO: INCLUDE HEADER FOR LOGGED IN USERS -->
    <?php
    include "./view/component/loggedOutHeader.php";
    if (isset($_GET['error'])) {
        include "./view/component/statusPopUp.php";
    }
    ?>
    <?= $content; ?>


    <footer>
        <!-- TODO: INCLUDE FOOTER LOGGED IN USERS -->
    </footer>

</body>

</html>