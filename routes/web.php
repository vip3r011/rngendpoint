<?php

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('random-number',  ['uses' => 'RandomNumberController@getRandomNumber']);
});