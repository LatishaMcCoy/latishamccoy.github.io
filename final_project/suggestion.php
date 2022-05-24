<?php
$a[] = "Watercolorist";
$a[] = "Graphic Designer";
$a[] = "Oil Painter";
$a[] = "Digital Artist";
$a[] = "Acrylic Painter";
$a[] = "Ink Artist";
$a[] = "Photographer";
$a[] = "Tempera";
$a[] = "Charcoal Artist ";
$a[] = "Wood Carver";
$a[] = "Traditional Artist";
$a[] = "Collagist";
$a[] = "Sculptor";
$a[] = "Muralist";
$a[] = "Graffitist";
$a[] = "Tattooist";



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