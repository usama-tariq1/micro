<?php

// $args = $_SERVER['request_uri'];

// $args = explode('/', $args);



Route::set('index.php', function () {
    Home::CreateView('index');
});


Route::set('aboutus', function () {
    AboutUs::CreateView('about');
});

Route::set('contactus', function () {
    ContactUs::CreateView('contact');
});
