<?php
if (isset($_GET['error']) and $_GET['error'] == "true") {
    echo '<link rel="stylesheet" href="public/css/popUpError.css">';
} else {
    echo '<link rel="stylesheet" href="public/css/popUpSuccess.css">';
}
?>

<dialog>

    <div class="modal-content">
        <button class="close-button" onclick="closeModal()">x</button>
        <h1><?= $_GET['message'] ?></h1>

        <!-- Should there be a confirmation and cancel button?
                    additional redirect buttons? -->
    </div>


</dialog>

<script src="./public/js/popUp.js"></script>