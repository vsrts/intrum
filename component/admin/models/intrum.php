<?php
// Запрет прямого доступа.
defined('_JEXEC') or die;

// Подключаем библиотеку modellist Joomla.
jimport('joomla.application.component.modellist');

/**
 * Модель списка сообщений компонента Intrum.
 */
class HelloWorldModelHelloWorlds extends JModelList
{
    /**
     * Метод для построения SQL запроса для загрузки списка данных.
     *
     * @return  string  SQL запрос.
     */
    protected function getListQuery()
    {
        // Создаем новый query объект.
        $db = JFactory::getDbo();
        $query = $db->getQuery(true);

        // Выбераем поля.
        $query->select('id, greeting');

        // Из таблицы intrum.
        $query->from('#__intrum');

        return $query;
    }
}