<?php

$title = "Edit a user";
ob_start();

if (isset($_GET['error'])) {
    include './view/component/statusPopUp.php';
};

?>
<link href="./public/css/formInput.css" rel="stylesheet" />
<script defer src="./public/js/imageUploadPreview.js"></script>

<div id="edit-user-picture-form">


    <form action="index.php?action=submitEditedProfilePicture" enctype="multipart/form-data" method="POST" id="editForm">
        <a href="index.php?action=userProfileView&id=<?= $_SESSION['id'] ?>">⬅ Go back</a>

        <div class="center">
            <div class="form-input">
                <div class="preview">
                    <img id="profileImage">
                </div>
            </div>
        </div>

        <p id="edit-user-picture">Edit Picture</p>
        <input type="hidden" accept="image/.png, image/jpeg, image/jpg" name="id" value="<?= $userinfo->id ?>">

        <p>
            <label for="profileImage">Profile Image: </label>
            <input type="file" name="profileImage" id="profileImage" onchange="showPreview(event);" value="<?= htmlspecialchars($userinfo->profile_img ?? "") ?>" accept="image/*">
        </p>
        <p>
            <input type="submit" value="submit changes" id="editSubmit">
        </p>

    </form>
</div>

<?php
$content = ob_get_clean();
require "template.php";
?>