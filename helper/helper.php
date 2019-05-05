<?php
if(IS_CLI){
    \think\Console::addDefaultCommands([
        "\\zhangpeng\\oss\\MakeDemo"
    ]);
}
