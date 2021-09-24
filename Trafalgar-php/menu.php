<?php
$menu = array (
   array ('link' => "Home", 'href'=>"index.php"),
   array ('link' => "Find a Doctor", 'href'=>"https://www.ukr.net/"),
   array ('link' => "Apps", 'href'=>"https://www.i.ua/"),
   array ('link' => "Testimonials", 'href'=>"https://toloka.to/"),
   array ('link' => "About Us", 'href'=>"https://www.youtube.com/"),
   array ('link' => "test", 'href'=>"i.ua")
);

echo "<div class='menu'>
<ul id='toolbar-list'>";
    foreach ($menu as $item) {
        if ($item['link'] == 'Home') {
            echo "<li><a href={$item['href']} class = 'active'>{$item ['link']}</a></li>";
        } else {
            echo "<li><a href='{$item['href']}'>{$item ['link']}</a></li>";
        }
    };
echo "</div>";