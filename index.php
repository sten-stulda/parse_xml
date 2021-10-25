<?php

$xmlFile = file_get_contents('./xml/e_schval_example.xml');

$eChval = new SimpleXMLElement($xmlFile);


echo '<h2>Konkrétní info (vybrané)</h2>';

echo '<p>číslo dokladu: ' . $eChval->detail->zav_faktura->cislo_dokladu . '</p>';

echo '<h2>Info z XML file</h2>';

function parseXML($data)
{
    foreach ($data as $key => $value) {
        parseXML($value);
        echo $key . ':' . $value . '<br>';
    }
}

parseXML($eChval);
