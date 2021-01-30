<section class="common wrapper">
    <div class="common-header__fone">
        <div class="common-header__cont">
            <h1 class="common-header__h1"><?= $work['title'] ?>_</h1>
        </div>
    </div>
    <div class="common-body">
        <div class="work">
            <?php if ($_GET['result'] === 'ok'  && $admin) : ?>
                <p class="result_loader"> Работа была успешно отредактированна!</p>
            <?php endif; ?>
            <?php if ($admin) : ?>
                <a href="./portfolio/edit?id=<?= $work['id'] ?>&order=1" class="link__outside">Edit this work</a>
            <?php endif; ?>
            <div class="work__img" data-src="<?= BIG . $work['img'] ?>">
                <img src="<?= BIG . $work['img'] ?>" width="720" height="476" alt="name" class="big-picture__img">
            </div>
            <h1 class="work__title"><?= $work['title'] ?></h1>
            <p class="work__description"><?= $work['description'] ?></p>
            <a href="<?= $work['project'] ?>" class="work__a">Посмотреть проект...</a>
            <?php if ($work['git'] != "noaccess") : ?>
                <a href="<?= $work['git'] ?>" class="work__a">Посмотреть код.. </a>
            <?php else : ?>
                <p class="work__noAccess">Код закрыт по просьбе заказчика..</p>
            <?php endif; ?>
            <a href="/portfolio/get" class="work__a">Назад в портфолио... </a>
        </div>
    </div>
</section>