<?php
$city[]="";
$city[]="Pristina";
$city[]="Tirana";
$city[]="Algiers";
$city[]="Andorra la Vella";
$city[]="Luanda";
$city[]="Saint John's";
$city[]="Buenos Aires";
$city[]="Yerevan";
$city[]="Canberra";
$city[]="Vienna";
$city[]="Baku";
$city[]="Nassau";
$city[]="Manama";
$city[]="Dhaka";
$city[]="Bridgetown";
$city[]="Minsk";
$city[]="Brussels";
$city[]="Belmopan";
$city[]="Porto-Novo";
$city[]="Thimphu";
$city[]="Sucre";
$city[]="Sarajevo";
$city[]="Gaborone";
$city[]="Brasilia";
$city[]="Sofia";
$city[]="Ottawa";
$city[]="Beijing";
$city[]="Santiago";
$city[]="Bogotá";
$city[]="Zagreb";
$city[]="Havanal";
$city[]="Copenhagen";
$city[]="Cairo";
$city[]="Tallinn";
$city[]="Helsinki";
$city[]="Paris";
$city[]="Berlin";
$city[]="New Delhi";
$city[]="Dublin";
$city[]="Rome";
$city[]="Tokyo";
$city[]="Riga";
$city[]="Vilnius";
$city[]="Skopje";
$city[]="Mexico City";
$city[]="Amsterdam";
$city[]="Wellington";
$city[]="Oslo";
$city[]="Lisbon";
$city[]="Bucharest";
$city[]="Moscow";
$city[]="Riyadh";
$city[]="Belgrade";
$city[]="Bratislavai";
$city[]="Ljubljana";
$city[]="Madrid";
$city[]="Stockholm";
$city[]="Bern";
$city[]="Ankara";
$city[]="Kyiv";
$city[]="Abu Dhabi";
$city[]="London";
$city[]="Washington, D.C.";
$city[]="Sydney";
$city[]="Quzhou";
$city[]="Eads";
$city[]="Ubá";
$city[]="Ianca";
// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($city as $name) {
        if (strstr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion!!!" : $hint;
?>