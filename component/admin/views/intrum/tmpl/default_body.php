<?php
// Запрет прямого доступа.
defined('_JEXEC') or die;
foreach ($this->items as $i => $item) : ?>
    <tr>
        <td>
            <?php echo JHtml::_('grid.id', $i, $item->id); ?>
        </td>
        <td>
            <?php echo $item->greeting; ?>
        </td>
        <td>
            <?php echo $item->id; ?>
        </td>
    </tr>
<?php endforeach; ?>