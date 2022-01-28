<?php
$data= file_get_contents('agent.xml');

$p = xml_parser_create();
xml_parse_into_struct($p, $data, $vals, $index);
xml_parser_free($p);
echo "Массив index\n";
print_r($index);
echo "\nМассив vals\n";
print_r($vals);
?>