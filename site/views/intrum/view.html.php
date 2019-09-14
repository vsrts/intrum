<?php

defined('_JEXEC') or die('Restricted access');

class IntrumViewIntrum extends JViewLegacy{
    public function display($tpl = null){
        $this->msg = $this->get('Item');
        parent::display($tpl);
    }
}