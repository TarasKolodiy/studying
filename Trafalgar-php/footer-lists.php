<?php
$companylist = array (
        array ('link' => 'About', 'href' => '#'),
        array ('link' => 'Testimonials', 'href' => '#'),
        array ('link' => 'Find a Doctor', 'href' => '#'),
        array ('link' => 'Help', 'href' => '#')
    );
$regionList = array (
        array ('link' => 'Indonesia', 'href' => '#'),
        array ('link' => 'Singapore', 'href' => '#'),
        array ('link' => 'Hongkong', 'href' => '#'),
        array ('link' => 'Canada', 'href' => '#')
    );
$helpList = array (
        array ('link' => 'Help center', 'href' => '#'),
        array ('link' => 'Contact support', 'href' => '#'),
        array ('link' => 'Instructions', 'href' => '#'),
        array ('link' => 'How it works', 'href' => '#')
    );

echo "<div class='company-list'>
    <h6>Company</h6>
    <ul>";
    foreach ($companylist as $item) {
        echo "<li><a href={$item['href']}>{$item['link']}</a></li>";
    };

echo "</div>
    <div class='region-list'>
    <h6>Region</h6>
    <ul>";
    foreach ($regionList as $item) {
    echo "<li><a href={$item['href']}>{$item['link']}</a></li>";
};

echo "</div>
    <div class='help-list'>
    <h6>Help</h6>
    <ul>";
    foreach ($helpList as $item) {
    echo "<li><a href={$item['href']}>{$item['link']}</a></li>";
};
echo "</div>";






