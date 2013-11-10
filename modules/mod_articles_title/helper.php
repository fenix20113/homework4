<?php defined( '_JEXEC' ) or die( 'Restricted access' );?>

<?php


class ModArticlesHelper
{
    static  function getTitles($params)
{
$db=JFactory::getDbo();
$query=$db->getQuery(true);
$query->select($db->quoteName('title'));
$query->from($db->quoteName('#__content'));
$query->order("ordering ASC");
$db->setQuery($query);
$result=$db->loadColumn();
return (array) $result;
}


}


?>