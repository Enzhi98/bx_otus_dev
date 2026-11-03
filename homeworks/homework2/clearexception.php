<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

\App\Debug\Log::cleanException();
LocalRedirect('/homeworks/homework2/');
