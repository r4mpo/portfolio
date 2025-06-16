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
                  <li class="breadcrumb-item">
                    <a href="<?= $item['link'] ?>"><?= $item['text'] ?></a>
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

<section id="contact-form" class="contact py-5">
  <div class="container">
    <div class="row text-center mb-4">
      <div class="col-12">
        <h2 class="section-title"><?= $lang['section']['title'] ?></h2>
        <h3 class="section-sub-title"><?= $lang['section']['subtitle'] ?></h3>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <form action="<?= $lang['form']['action'] ?>" method="POST" class="education-and-xp-card p-4" onsubmit="return false;">
          <?php foreach ($lang['form']['fields'] as $field): ?>
            <div class="mb-3">
              <label for="<?= $field['id'] ?>" class="form-label"><?= $field['label'] ?></label>

              <?php if ($field['type'] === 'textarea'): ?>
                <textarea class="form-control" id="<?= $field['id'] ?>" name="<?= $field['name'] ?>"
                  rows="<?= $field['rows'] ?>" <?= $field['required'] ? 'required' : '' ?>></textarea>
              <?php else: ?>
                <input type="<?= $field['type'] ?>" class="form-control" id="<?= $field['id'] ?>"
                  name="<?= $field['name'] ?>" <?= $field['required'] ? 'required' : '' ?>>
              <?php endif; ?>
            </div>
          <?php endforeach; ?>

          <div class="text-center mt-4">
            <button type="submit" class="btn btn-primary px-5 sendMail"><?= $lang['form']['submit_text'] ?></button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/layouts/footer.php'; ?>