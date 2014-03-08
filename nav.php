<?php
echo '<ul>';

echo ($PHP_SELF == '/page1.php') ? 
'<li><a class="active" href="/page1.php">Page One</a></li>' :
'<li><a class="none" href="/page1.php">Page One</a></li>';

echo ($PHP_SELF == '/page2.php') ? 
'<li><a class="active" href="/page2.php">Page Two</a></li>' :
'<li><a class="none" href="/page2.php">Page Two</a></li>';

echo ($PHP_SELF == '/page3.php') ? 
'<li><a class="active" href="/page3.php">Page Three</a></li>' :
'<li><a class="none" href="/page3.php">Page Three</a></li>';

echo ($PHP_SELF == '/page4.php') ? 
'<li><a class="active" href="/page4.php">Page Four</a></li>' :
'<li><a class="none" href="/page4.php">Page Four</a></li>';

echo '</ul>';
?>