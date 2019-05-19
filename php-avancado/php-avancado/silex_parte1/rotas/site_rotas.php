<?php

$ctrl = Stox\Controllers\SiteController::class;

$app->get('/', "$ctrl::index");
$app->get('/rotanova', "$ctrl::rotanova");
