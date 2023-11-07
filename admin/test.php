<?php
$url = $_SERVER['REQUEST_URI'];
echo $url;

if ($url === '/WD18331_DuAn1/admin/test.php') {
    // Logic for page1
    echo "This is page 1.";
} elseif ($url == '/page2') {
    // Logic for page2
    echo "This is page 2.";
} else {
    // Default logic for other pages
    echo "This is a different page.";
}
 ?>