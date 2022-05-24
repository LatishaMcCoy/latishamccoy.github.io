<?php
$a[] = "Acrophobia";
$a[] = "Aerophobia";
$a[] = "Agoraphobia";
$a[] = "Alliumphobia";
$a[] = "Arachibutyrophobia";
$a[] = "Trypophobia";
$a[] = "Hydrophobia";
$a[] = "Bibliophobia";
$a[] = "Brontophobia ";
$a[] = "Belonephobia";
$a[] = "Claustrophobia";
$a[] = "Coulrophobia";
$a[] = "Dentophobia";
$a[] = "Dendrophobia";
$a[] = "Arachnophobia";
$a[] = "Entomophobia";
$a[] = "Eremophobia ";
$a[] = "Emetophobia";
$a[] = "Gephyrophobia";
$a[] = "Hematophobia";
$a[] = "Hydrophobia";
$a[] = "Herpetophobia";
$a[] = "Mysophobia";
$a[] = "Nyctophobia";
$a[] = "Neophobia";
$a[] = "Nomophobia";
$a[] = "Somniphobia";
$a[] = "Taphophobia";
$a[] = "Rupophobia";


$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;




?>