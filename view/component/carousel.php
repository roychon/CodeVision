<div class="slide" style="background-image: url(<?= $carousels[$i]->gif ?>)" <?php if ($i == 0) echo "data-active" ?>>
    <div class="flex">
        <img class="carousel-profile-img" src="<?= $carousels[$i]->profile_img ?>" alt="">
        <p class="carousel-username"><?= $carousels[$i]->username ?></p>
    </div>
    <h1><?= $carousels[$i]->title ?></h1>
    <p class="carousel-description"><?= $carousels[$i]->description ?></p>
    <button class="viewMore" data-projectid = <?= $carousels[$i]->project_id ?>>More Details</button>
</div>