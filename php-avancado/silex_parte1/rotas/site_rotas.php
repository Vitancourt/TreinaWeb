<?php

$ctrl = Stox\Controllers\SiteController::class;

$app->get('/', "SiteController::index");
// $app->get('/rotanova', "$ctrl::rotanova");
