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

<section id="education" class="education">
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
              <?php if ($card['svg'] == 'postgraduate'): ?>
                <svg width="60" height="60" viewBox="0 0 24 24" fill="#007bff" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3 4a1 1 0 011-1h12a1 1 0 011 1v1H3V4zM3 7h14v13a1 1 0 01-1 1H4a1 1 0 01-1-1V7zm16-3h2v2h-2V4zm0 3h2v13a1 1 0 01-1 1h-1V7z" />
                </svg>
              <?php elseif ($card['svg'] == 'graduation'): ?>
                <svg width="60" height="60" viewBox="0 0 24 24" fill="#28a745" xmlns="http://www.w3.org/2000/svg">
                  <path d="M12 2L1 7l11 5 9-4.09V17h2V7L12 2z" />
                  <path d="M11 12.84L3.26 9.2 2 9.81v2.08l9 4.09 9-4.09V9.81l-1.26-.61L13 12.84v3.4l-2-.9v-2.5z" />
                </svg>
              <?php elseif ($card['svg'] == 'technical'): ?>
                <svg width="60" height="60" viewBox="0 0 24 24" fill="#fd7e14" xmlns="http://www.w3.org/2000/svg">
                  <path d="M4 4h16v16H4V4zm2 2v12h12V6H6zm3 3l-1.41 1.41L10.17 12l-2.58 2.59L9 16l4-4-4-4zm5 1v2h4v-2h-4zm0 4v2h4v-2h-4z" />
                </svg>
              <?php endif; ?>
            </div>

            <div class="education-and-xp-body">
              <h4 class="education-and-xp-title"><?= $card['title'] ?></h4>
              <p class="education-and-xp-subtitle"><?= $card['subtitle'] ?></p>
              <p><?= $card['description'] ?></p>
              <a href="<?= $card['link']['url'] ?>" target="_blank"><?= $card['link']['text'] ?></a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php include __DIR__ . '/layouts/footer.php'; ?>