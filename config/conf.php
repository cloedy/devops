<?php
require ROOT . '/config/const.php';

foreach (glob(ROOT . '/routes/*.php') as $file) {
    require $file;
}