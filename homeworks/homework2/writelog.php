<?
 require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
 require_once $_SERVER['DOCUMENT_ROOT'] . '/local/php_interface/classes/Debug/Log.php'; 
 ?>
<?php
$APPLICATION->SetTitle("Добавление в лог");
?>
<ul class="list-group">
    <li class="list-group-item">
        <a href="/local/logs/log_custom.log">Файл лога</a>,
        в лог добавленно 'Открыта страница writelog.php'
    </li>
</ul>
<?


\App\Debug\Log::addLog('OnBeforeHLEAdd');


?>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>