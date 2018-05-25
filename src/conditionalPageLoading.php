<?php
/* this gets the current working document name and extension as a variable, eg. "index.php" */
$current_page = basename($_SERVER['PHP_SELF']);

function loadCSSFile($fileName){
  if (file_exists("css/" . $fileName)){
    echo '<link href="css/' . $fileName . '" rel="stylesheet">';
  }
}

?>
