<?php

defined('_JEXEC') or die('Restricted access');

class IntrumModelIntrum extends JModelItem{

    public function getItem(){
        if(!isset($this->_item)){
            $this->_item = 'Hello World';
        }
        return $this->_item;
    }
}