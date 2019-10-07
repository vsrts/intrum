<?php
// Запрет прямого доступа.
defined('_JEXEC') or die;
?>
<tr>
    <th width="1%">
        <input type="checkbox" name="checkall-toggle" value="" title="<?php echo JText::_('JGLOBAL_CHECK_ALL'); ?>" onclick="Joomla.checkAll(this)" />
    </th>
    <th>
        <?php echo JText::_('COM_INTRUM_HEADING_GREETING'); ?>
    </th>
    <th width="1%">
        <?php echo JText::_('COM_INTRUM_HEADING_ID'); ?>
    </th>
</tr>