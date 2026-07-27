<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">
        <img src="../assets/rochen_logo-circle.png" alt="Sippis" style="max-height: 100px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <?php foreach ($router->all() as $url => $page) : ?>
            <?php if ($page->showInNav) : ?>
                <li class="nav-item <?= $router->isCurrentRoute($route, $page) ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= $url ?>">
                        <?= htmlspecialchars($page->title) ?>
                    </a>
                </li>
            <?php endif; ?>
            <?php endforeach; ?>
        </ul>
    </div>
</nav>