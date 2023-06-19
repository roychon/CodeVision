<?php
if (isset($_GET['error']) and $_GET['error'] == "true") {
    echo '<link rel="stylesheet" href="popUpError.css">';
} else {
    echo '<link rel="stylesheet" href="popUpSuccess.css">';
}
?>

<div class="modal">
    <div class="modal-content">
        <span class="close-button">×</span>
        <h1><?= $_GET['message'] ?></h1>
    </div>
</div>


<script src="popUp.js"></script>