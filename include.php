<?php
namespace Marvell;

require_once __DIR__ . 'classes/Main.php';

AddEventHandler('iblock', 'OnBeforeIBlockAdd', array('Marvell\Main', 'checkCode'));
AddEventHandler('iblock', 'OnBeforeIBlockUpdate', array('Marvell\Main', 'checkCode'));