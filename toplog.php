<?php
define('PROCESSES_COUNT', 20);
define('DELAY', 2);

$garbage = [
    "%CPU USER     COMMAND\n", 
];

sleep(DELAY);

//'ps -eo pcpu,user,args | sort -nk 1 -r | head -20' gives an error with sort
echo date('Y-m-d H:i:s') . PHP_EOL;
echo 
    implode(
        "\n", 
        array_slice(
            explode(
                "\n", 
                str_replace(
                    $garbage, 
                    '', 
                    shell_exec('ps -eo pcpu,user,args | sort -nk 1 -r')
                ) 
            ), 
            0, 
            PROCESSES_COUNT
        )
    ) . PHP_EOL . PHP_EOL;
