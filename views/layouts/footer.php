<footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-6 footer-widget footer-about">
                    <h3 class="widget-title"><?= $langFooter['about']['title'] ?></h3>
                    <img loading="lazy" width="200px" class="footer-logo" src="images/erick-photo.jpeg"
                        alt="Erick Agostinho">
                    <p><?= $langFooter['about']['description'] ?></p>
                </div>

                <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                    <h3 class="widget-title"><?= $langFooter['what_i_do']['title'] ?></h3>
                    <div class="working-hours"><?= $langFooter['what_i_do']['description'] ?></div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                    <h3 class="widget-title"><?= $langFooter['links']['title']; ?></h3>
                    <ul class="list-arrow">
                        <?php foreach ($langFooter['links']['items'] as $link): ?>
                            <li><a href="<?= $link['link'] ?>" <?= isset($link['external']) && $link['external'] ? 'target="_blank"' : '' ?>><?= $link['text'] ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="copyright-info">
                        <span>&copy;
                            <script>document.write(new Date().getFullYear())</script> <?= $langFooter['copyright']['text']; ?>
                        </span>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="footer-menu text-center text-md-right">
                        <ul class="list-unstyled">
                            <?php foreach ($langFooter['copyright']['menus'] as $menu): ?>
                                <li><a href="<?= $menu['link'] ?>"><?= $menu['text'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                <button class="btn btn-primary" title="Voltar ao Topo">
                    <i class="fa fa-angle-double-up"></i>
                </button>
            </div>
        </div>
    </div>
</footer>

<!-- initialize jQuery Library -->
<script src="plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap jQuery -->
<script src="plugins/bootstrap/bootstrap.min.js" defer></script>
<!-- Slick Carousel -->
<script src="plugins/slick/slick.min.js"></script>
<script src="plugins/slick/slick-animation.min.js"></script>
<!-- Color box -->
<script src="plugins/colorbox/jquery.colorbox.js"></script>
<!-- shuffle -->
<script src="plugins/shuffle/shuffle.min.js" defer></script>
<!-- Google Map API Key-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
<!-- Google Map Plugin-->
<script src="plugins/google-map/map.js" defer></script>
<!-- Template custom -->
<script src="js/script.js"></script>
</div>
</body>
</html>