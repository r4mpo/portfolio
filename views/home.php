<?php include __DIR__ . '/layouts/header.php'; ?>

<div class="banner-carousel banner-carousel-1 mb-0">
    <?php foreach ($lang["banners"] as $banner): ?>
        <div class="banner-carousel-item" style="background-image:url(<?= htmlspecialchars($banner["background"]) ?>)">
            <div class="slider-content">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-md-12 text-center">
                            <?= $banner["content"]; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<section class="call-to-action-box no-padding">
    <div class="container">
        <div class="action-style-box">
            <div class="row align-items-center">
                <div class="col-md-8 text-center text-md-left">
                    <div class="call-to-action-text">
                        <h3 class="action-title"><?= htmlspecialchars($lang["call_to_action"]["title"]) ?></h3>
                    </div>
                </div>
                <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
                    <div class="call-to-action-btn">
                        <a class="btn btn-dark"
                            href="<?= htmlspecialchars($lang["call_to_action"]["button"]["link"]) ?>">
                            <?= htmlspecialchars($lang["call_to_action"]["button"]["text"]) ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about_me" class="about_me">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ts-intro">
                    <h2 class="into-title"><?= htmlspecialchars($lang["about_me"]["title"]) ?></h2>
                    <h3 class="into-sub-title"><?= htmlspecialchars($lang["about_me"]["subtitle"]) ?></h3>
                    <p class="text-justify"><?= htmlspecialchars($lang["about_me"]["description"]) ?></p>
                </div>
                <div class="gap-20"></div>
                <div class="row">
                    <?php foreach ($lang["about_me"]["servicos"] as $servico): ?>
                        <div class="col-md-6">
                            <div class="ts-service-box">
                                <span class="ts-service-icon"><i
                                        class="<?= htmlspecialchars($servico["icon"]) ?>"></i></span>
                                <div class="ts-service-box-content">
                                    <h3 class="service-box-title"><?= htmlspecialchars($servico["title"]) ?></h3>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="col-lg-6 mt-4 mt-lg-0">
                <h3 class="into-sub-title"><?= htmlspecialchars($lang["about_me"]["skills_title"]) ?></h3>
                <p>
                    <?php foreach ($lang["about_me"]["skills"] as $skill): ?>
                        <?= htmlspecialchars($skill) ?><br>
                    <?php endforeach; ?>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="repositories" class="repositories">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title"><?= htmlspecialchars($lang["repositories"]["title"]) ?></h2>
                <h3 class="section-sub-title margin-default-sub-title">
                    <?= htmlspecialchars($lang["repositories"]["subtitle"]) ?></h3>
            </div>
        </div>

        <div class="row projetos-row">
            <?php foreach ($lang["repositories"]["repos"] as $repo): ?>
                <div class="col-lg-3 col-md-6 mb-3">
                    <div class="latest-post">
                        <div class="latest-post-media d-flex justify-content-center align-items-center"
                            style="height: 80px;">
                            <?php if ($repo["image"] === "laravel"): ?>
                                <!-- Laravel SVG -->
                                <svg width="60" height="60" viewBox="0 0 512 512" fill="#FF2D20"
                                    xmlns="http://www.w3.org/2000/svg" aria-label="Laravel Icon" role="img">
                                    <path d="M463.79 36.04 350.75 160.06H251.12L418.67 36.04H463.79Z" />
                                    <path d="M145.33 160.06 32.29 36.04H77.41L245.03 160.06H145.33Z" />
                                    <path
                                        d="M463.79 219.52H414.38L325.94 327.66H275.98L363.25 219.52H313.89L245.03 292.48 176.33 219.52H128.28L241.2 342.14H292.15L128.29 477.96H81.45L245.03 351.5 408.4 477.96H458.16L463.79 219.52Z" />
                                </svg>

                            <?php elseif ($repo["image"] === "c++"): ?>
                                <!-- C++ SVG -->
                                <svg width="60" height="60" viewBox="0 0 64 64" xmlns="http://www.w3.org/2000/svg"
                                    aria-label="C++ Icon" role="img">
                                    <rect width="64" height="64" rx="8" ry="8" fill="#00599C" />
                                    <text x="50%" y="50%" fill="#fff" font-family="Arial, sans-serif" font-size="32"
                                        font-weight="bold" text-anchor="middle" alignment-baseline="middle">C++</text>
                                </svg>

                            <?php else: ?>
                                <!-- Imagem padrão -->
                                <a href="<?= htmlspecialchars($repo["link"]) ?>" target="_blank" class="latest-post-img">
                                    <img loading="lazy" class="img-fluid" src="<?= htmlspecialchars($repo["image"]) ?>"
                                        alt="<?= htmlspecialchars($repo["title"]) ?>">
                                </a>
                            <?php endif; ?>
                        </div>

                        <div class="post-body">
                            <h4 class="post-title">
                                <a href="<?= htmlspecialchars($repo["link"]) ?>" target="_blank"
                                    class="d-inline-block"><?= htmlspecialchars($repo["title"]) ?></a>
                            </h4>

                            <?php if (!empty($repo["desc"])): ?>
                                <div class="latest-post-meta">
                                    <span class="post-item-date"><?= htmlspecialchars($repo["desc"]) ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="general-btn text-center mt-4">
            <a class="btn btn-primary" href="<?= htmlspecialchars($lang["repositories"]["ver_mais"]["link"]) ?>"
                target="_blank">
                <?= htmlspecialchars($lang["repositories"]["ver_mais"]["text"]) ?>
            </a>
        </div>
    </div>
</section>

<section id="freelancer-pricing" class="pricing-section">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title"><?= htmlspecialchars($lang["freelancer"]["title"]) ?></h2>
                <h3 class="section-sub-title margin-default-sub-title">
                    <?= htmlspecialchars($lang["freelancer"]["subtitle"]) ?></h3>
            </div>
        </div>

        <div class="row justify-content-center">
            <?php foreach ($lang["freelancer"]["services"] as $service): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="pricing-box">
                        <div class="pricing-header">
                            <h3><?= htmlspecialchars($service["title"]) ?></h3>
                        </div>
                        <p><?= htmlspecialchars($service["desc"]) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <div class="pricing-info bg-light p-4 rounded">
                    <h4 class="text-center mb-3"><?= htmlspecialchars($lang["freelancer"]["incluso_title"]) ?></h4>
                    <ul class="list-unstyled">
                        <?php foreach ($lang["freelancer"]["incluso"] as $item): ?>
                            <li><?= htmlspecialchars($item) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="general-btn text-center mt-4">
            <a class="btn btn-primary" href="<?= htmlspecialchars($lang["freelancer"]["orcamento_btn"]["link"]) ?>">
                <?= htmlspecialchars($lang["freelancer"]["orcamento_btn"]["text"]) ?>
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/layouts/footer.php'; ?>