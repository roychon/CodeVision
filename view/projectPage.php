<?php
$title = "Full Project Page HTML";
ob_start();
?>

<?php
if (isset($_SESSION['id'])) {
  include "./view/component/loggedInHeader.php";
} else {
  include "./view/component/loggedOutHeader.php";
}
?>

<div class="project-container">

  <div class="top-container"> <!--block elements -->
    <div class="profile-img">
      <!-- TODO:connect backend to the profile image info DONE-->
      <img class="user-img1" src="<?= $fullProject->profile_img ?>" alt="the photo of <?= $fullProject->username; ?>">
    </div>
    <div class="titleName"> <!--inline elements -->
      <div class="title">
        <h1><?= $fullProject->title ?></h1>
      </div>
      <div class="username"><?= $fullProject->username ?></div>
    </div>
  </div>

  <div class="middle-container">
    <div class="animation-container">
      <p>
        <video class="project-gif" autoplay muted src="./public/uploaded_videos/<?= $fullProject->video_src ?>"></video>

        <!-- <img class="project-gif" src="<?= $fullProject->gif ?>" alt="user project gif"> -->
      </p>
    </div>

    <div class="langTag">
      <!-- flex-direction: column    -->
      <div class="user-logo"><img class="user-img2" src="<?= $fullProject->profile_img ?>" alt="the photo of <?= $fullProject->username; ?>"></div>
      <!-- Trigger/Open The Modal -->
      <div class="tooltip">
        <button id="infoBtn">
          <i class="fa-solid fa-circle-info"></i><span class="tooltiptext">Project Info</span>
        </button>
      </div>

      <!-- social media links -->
      <div class="gitHub">
        <a href="<?= $userInfo->gitHub; ?>"><i class="fa-brands fa-2xl fa-github" style=" font-size: 4rem;"></i></a>
      </div>
      <div class="linkedin">
        <a href="<?= $userInfo->linkedIn; ?>"><i class="fa-brands fa-2xl fa-linkedin" style="font-size: 4rem;;"></i></a>
      </div>


      <!-- The Modal -->
      <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
          <span class="close">&times;</span>
          <div class="languages">Made with:
            <?php
            for ($i = 0; $i < count($fullProject->languages); $i++) {
              echo $fullProject->languages[$i] . " ";
            }; ?>
          </div>
          <br>
          <div class="tags">
            <?php foreach ($tags as $tag) {
              echo "<span class='tag'>$tag</span>";
            } ?></div>
        </div>
      </div>

    </div>

  </div>
  <!--inline elements -->
  <div class="bottom-container">
    <div class="description"><?= $fullProject->description ?>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure ex ab impedit assumenda minima minus beatae at neque alias in temporibus distinctio nam laudantium facere quas adipisci, amet, consequuntur accusamus! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni necessitatibus sequi consectetur sint voluptatibus a adipisci laboriosam minima id cum commodi, cupiditate quasi accusantium animi dignissimos doloribus? Unde, in rem.</div>
    <div class="modify">
      <button class="edit-btn"><a class="edit" href="index.php?action=updateProjectForm&project_id=<?= $fullProject->id ?>">Edit</a></button> <!--edit and delete, block elements -->
      <button class="delete-btn"><span><a class="delete" href="index.php?action=delete_project&project_id=<?= $fullProject->id ?>">Delete</a></span></button>
    </div>
  </div>

</div>

<?php
$content = ob_get_clean();
require "projectTemplate.php";
// require "template.php";
?>