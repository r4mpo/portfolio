<?php include __DIR__ . '/layouts/header.php'; ?>

<div id="banner-area" class="banner-area" style="background-image:url(<?= $lang['banner']['background'] ?>)">
  <div class="banner-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="banner-heading">
            <h1 class="banner-title"><?= $lang['banner']['title'] ?></h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb justify-content-center">
                <?php foreach ($lang['banner']['breadcrumb'] as $breadcrumb): ?>
                  <li class="breadcrumb-item">
                    <a href="<?= $breadcrumb['link'] ?>"><?= $breadcrumb['text'] ?></a>
                  </li>
                <?php endforeach; ?>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="xp" class="xp">
  <div class="container">
    <div class="row text-center">
      <div class="col-12">
        <h2 class="section-title"><?= $lang['section']['title'] ?></h2>
        <h3 class="section-sub-title margin-default-sub-title"><?= $lang['section']['subtitle'] ?></h3>
      </div>
    </div>
    <div class="row">
      <?php foreach ($lang['cards'] as $card): ?>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="education-and-xp-card">
            <div class="education-and-xp-icon">
              <?= $card['svg'] ?>
            </div>
            <div class="education-and-xp-body">
              <h4 class="education-and-xp-title text-center"><?= $card['title'] ?></h4>
              <p class="education-and-xp-subtitle text-center"><?= $card['subtitle'] ?></p>
              <p class="text-justify"><?= $card['description'] ?></p>
              <a href="<?= $card['link']['url'] ?>" target="_blank"><?= $card['link']['text'] ?></a>
            </div>

          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="general-btn text-center mt-4 text-center">
    <a class="btn btn-primary" href="<?= $lang['resume_button']['url'] ?>" target="_blank">
      <i class="<?= $lang['resume_button']['icon'] ?>"></i> <?= $lang['resume_button']['text'] ?>
    </a>
  </div>
</section>

<?php include __DIR__ . '/layouts/footer.php'; ?>