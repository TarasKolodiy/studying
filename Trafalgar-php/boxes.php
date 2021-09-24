<?php

$boxes = array (
    array ('img-src' => 'images/search-doctor.png', 'title' => 'Search doctor',
    'description' => 'Choose your doctor from thousands of specialist, general, and trusted hospitals',
    'add-text' => 'Choose your doctor from thousands of specialist, general, and trusted hospitals
    Choose your doctor from thousands of specialist, general, and trusted hospitals'),
    array ('img-src' => 'images/online-pharmacy.png', 'title' => 'Online pharmacy',
    'description' => 'Buy  your medicines with our mobile application with a simple delivery system',
    'add-text' => 'Buy  your medicines with our mobile application with a simple delivery system
    Buy  your medicines with our mobile application with a simple delivery system'),
    array ('img-src' => 'images/consultation.png', 'title' => 'Consultation',
    'description' => 'Free consultation with our trusted doctors and get the best recomendations',
    'add-text' => 'Free consultation with our trusted doctors and get the best recomendations
    Free consultation with our trusted doctors and get the best recomendations'),
    array ('img-src' => 'images/details-info.png', 'title' => 'Details info',
    'description' => 'Free consultation with our trusted doctors and get the best recomendations',
    'add-text' => 'Free consultation with our trusted doctors and get the best recomendations
    Free consultation with our trusted doctors and get the best recomendations'),
    array ('img-src' => 'images/emergency-care.png', 'title' => 'Emergency care',
    'description' => 'You can get 24/7 urgent care for yourself or your children and your lovely family',
    'add-text' => 'You can get 24/7 urgent care for yourself or your children and your lovely family
    You can get 24/7 urgent care for yourself or your children and your lovely family'),
    array ('img-src' => 'images/tracking2.png', 'title' => 'Tracking',
    'description' => 'Track and save your medical history and health data',
    'add-text' => 'Track and save your medical history and health data
    Track and save your medical history and health data')
);

$hiddenBoxes = array (
    array ('img-src' => 'images/search-doctor.png', 'title' => 'Search doctor',
    'description' => 'Choose your doctor from thousands of specialist, general, and trusted hospitals',
    'add-text' => 'Choose your doctor from thousands of specialist, general, and trusted hospitals
    Choose your doctor from thousands of specialist, general, and trusted hospitals'),
    array ('img-src' => 'images/search-doctor.png', 'title' => 'Search doctor',
    'description' => 'Choose your doctor from thousands of specialist, general, and trusted hospitals',
    'add-text' => 'Choose your doctor from thousands of specialist, general, and trusted hospitals
    Choose your doctor from thousands of specialist, general, and trusted hospitals'),
    array ('img-src' => 'images/search-doctor.png', 'title' => 'Search doctor',
    'description' => 'Choose your doctor from thousands of specialist, general, and trusted hospitals',
    'add-text' => 'Choose your doctor from thousands of specialist, general, and trusted hospitals
    Choose your doctor from thousands of specialist, general, and trusted hospitals')
)
?>

<div class="service-boxes">
    <?php
    foreach ($boxes as $item) {
        echo "<div class='box'>
        <img class='picturebox' src={$item['img-src']}>
        <h4>{$item['title']}</h4>
        <p class='boxdescription'>{$item['description']}
            <span class='suffix'>...</span>
            <span class='add-text'>{$item['add-text']}</span>
        </p>
        </div>
        ";
    }

    foreach ($hiddenBoxes as $item) {
        echo "<div class='box hidden-box'>
        <img class='picturebox' src={$item['img-src']}>
        <h4>{$item['title']}</h4>
        <p class='boxdescription'>{$item['description']}
            <span class='suffix'>...</span>
            <span class='add-text'>{$item['add-text']}</span>
        </p>
        </div>
        ";
    }
    ?>
</div>