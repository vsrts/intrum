<?php

defined('_JEXEC') or die('Restricted access');

class IntrumViewIntrum extends JViewLegacy{
    public function display($tpl = null){
        $this->content = $this->get('Items');
        parent::display($tpl);
    }
}