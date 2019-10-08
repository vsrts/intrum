<?php

defined('_JEXEC') or die('Restricted access');


class IntrumModelIntrum extends JModelItem{

    protected function populateState()
    {
        $app = JFactory::getApplication();
        // Получаем Id сообщения из Запроса.
        $catId = $app->input->getInt('catId', 0);
        // Добавляем Id сообщения в состояние модели.
        $this->setState('message.catId', $catId);
        parent::populateState();
    }

    private $api;
    private function connectIntrum()
    {
        $this->api = VsApiIntrum::getInstance()
            ->setup(
                array(
                    "host"   => "alternativa.intrumnet.com",
                    "apikey" => "7853a80ac5d1f788f5190565290fb57d",
                    "cache"  => false,
                    "port"   => 81
                )
            );
    }

    public function getItems(){
        $type = 7;
        $catId = (!empty($catId)) ? $catId : (int) $this->getState('message.catId');
        $this->connectIntrum();
        $items = $this->api->getStockByFilter(array(
            'type' => $type,
            'category' => $catId,
            'nested' => true,
        ));
        $fields = $this->api->getStockFields();
        $list = $items['data']['list'];
        foreach ($list as $key => $item) {
            $item['field'] = array();
            foreach ($item['fields'] as $fieldKey => $field) {
                if ($field['type'] == 'file') {
                    $field['value'] = $this->api->getStockUrlPhoto($field['value']);
                }
                $field['name'] = $fields['data'][$type]['fields'][$field['id']]['name'];
                $list[$key]['field'][$field['id']] = ['name' => $field['name'], 'value' => $field['value']];
            }
            unset($list[$key]['fields']);
        }

        return $list;
    }

    public function getAll(){

    }
}