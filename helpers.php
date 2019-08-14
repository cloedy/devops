<?php

use Faker\Factory;
use GuzzleHttp\Client;


function c()
{
    return new Client();
}


function faker()
{
    return Factory::create('zh_CN');
}