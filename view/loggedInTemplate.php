<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="./public/css/main.css" rel="stylesheet" />
    <link rel="icon" type="image/x-icon" href="./public/css/logo2.png">
    <link href="./public/css/projectCard.css" rel="stylesheet">
    <script defer src="./public/js/search.js"></script>
    <script defer src="https://kit.fontawesome.com/808c973e0c.js" crossorigin="anonymous"></script>



</head>

<body>
    <!-- LOGGED IN CAN VIEW :::
  MAIN PAGE // OPENING PAGE // OVERALL CARD PAGES (SAME THING THAT LOGGED IN USERS CAN SEE)
  LOGIN IN PAGE
  SIGN UP PAGE
  LOGOUT PAGE

  CANNOT VIEW:::
  INDIVIDUAL CARD PAGES
  LOG OUT PAGE
    -->

    <!-- TODO: INCLUDE HEADER FOR NON LOGGED IN USERS -->
    <?php
    if (isset($_GET['error'])) {
        include "./view/component/statusPopUp.php";
    }
    ?>
    <?= $content; ?>



</body>

</html>