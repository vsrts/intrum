<?php
defined('_JEXEC') or die('Restricted access');

$pageLink = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>

<?php foreach($this->content as $item): ?>
    <div class="item-block" id="<?= $item['id']; ?>">
        <div class="teaser-image">
            <img src="<?= $item['field']['89']['value']; ?>">
        </div>
        <div class="teaser-info">
            <div class="teaser-head">
                <h2 class="teaser-name"><?= $item['name']; ?></h2>

                <span class="teaser-id"><?= $item['id']; ?></span>

            </div>
            <div class="teaser-list">
                <div class="list-element teaser-to"><span class="name-field">Куда: </span><?= $item['field']['71']['value']; ?>/<?= $item['field']['72']['value']; ?></div>
                <div class="list-element teaser-date"><span class="name-field"><?= $item['field']['87']['name']; ?>: </span><?= $item['field']['87']['value']; ?></div>
                <div class="list-element teaser-duration"><span class="name-field"><?= $item['field']['74']['name']; ?>: </span> <?= $item['field']['74']['value']; ?></div>
                <div class="list-element teaser-from"><span class="name-field"><?= $item['field']['236']['name']; ?>: </span><?= $item['field']['236']['value']; ?></div>
                <div class="list-element link-item"><span class="link-head">Ссылка на тур</span><span class="link-link">http://<?= $pageLink . $item['id']; ?></span></div>
            </div>
            <div class="list-buttons">
                <a class="item-link">Отправить заявку</a>
                <a class="item-link more" href="/detail/?item=" target="_blank">Подробнее</a>
                <div class="list-element teaser-price"><span class="price-line"><span class="name-field">Цена: </span> <?= $item['field']['81']['value']; ?> руб.</span></div>
                <a onclick="ipayCheckout({
                            amount:1,
                            currency:\'RUB\',
                            order_number:\'\',
                            description: \'' . $tourName . '\'},
                            function(order) { showSuccessfulPurchase(order) },
                            function(order) { showFailurefulPurchase(order) })"
                   class="price-btn">Купить</a>
            </div>
        </div>
    </div>

    <?php
//    echo "<pre>";
//print_r($item);
//echo "<pre>";

    ?>
<?php endforeach; ?>
