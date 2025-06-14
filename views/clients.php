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
                <?php foreach ($lang['banner']['breadcrumb'] as $item): ?>
                  <li class="breadcrumb-item"><a href="<?= $item['link'] ?>"><?= $item['text'] ?></a></li>
                <?php endforeach; ?>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section id="main-container" class="main-container pb-4">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2 class="section-title"><?= $lang['section']['title'] ?></h2>
        <h3 class="section-sub-title" style="margin: 0 0 20px;"><?= $lang['section']['subtitle'] ?></h3>
        <p><?= $lang['section']['description'] ?></p>
      </div>
    </div>

    <div class="row justify-content-center">
      <?php foreach ($lang['cards'] as $card): ?>
        <div class="col-lg-4 col-sm-6 mb-5">
          <div class="ts-team-wrapper">
            <div class="team-img-wrapper">
              <?= $card['svg'] ?>
            </div>

            <div class="ts-team-content-classic">
              <h3 class="ts-name"><?= $card['title'] ?></h3>
              <p class="ts-designation"><?= $card['designation'] ?></p>
              <p class="ts-description"><?= $card['description'] ?></p>

              <div class="team-social-icons text-center">
                <?php foreach ($card['socials'] as $social): ?>
                  <a target="_blank" href="<?= $social['link'] ?>"><i class="<?= $social['icon'] ?>"></i></a>
                <?php endforeach; ?>
              </div>

            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/layouts/footer.php'; ?>