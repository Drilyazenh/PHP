<section class="lots">
    <div class="lots__header">
        <h2>Результаты поиска по запросу «<span>Union</span>»</h2>
    </div>

    <ul class="lots__list">
        <?php for($i=0;$i<count($adArr);$i++){ ?>
            <li class="lots__item lot">
                <div class="lot__image">
                    <img src=<?= $adArr[$i]['path'] ?> width="350" height="260" alt="Сноуборд">
                </div>
                <div class="lot__info">
                    <span class="lot__category"><?= $adArr[$i]['category'] ?></span>
                    <h3 class="lot__title"><a class="text-link" href="lot.php?id=<?=$i;?>"><?= htmlspecialchars($adArr[$i]['title']) ?></a></h3>
                    <div class="lot__state">
                        <div class="lot__rate">
                            <span class="lot__amount">Стартовая цена</span>
                            <span class="lot__cost"><?= formatingPrice($adArr[$i]['price'])."<b class=rub>р</b>" ?></span>
                        </div>
                        <div class="lot__timer timer">
                            <?= liveLots() ?>

                        </div>
                    </div>
                </div>
            </li>
        <?php } ?>
    </ul>
</section>

