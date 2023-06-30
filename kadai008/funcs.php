<?php
//共通に使う関数を記述
//XSS対応（ echoする場所で使用！それ以外はNG ）

function h($string)
{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
