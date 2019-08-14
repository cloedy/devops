<?php

use cloedy\TestCase;


class OrderTest extends TestCase
{
    public function testLists()
    {
        $c = c();
        $res = $c->post(LOAN_ORDER_LISTS, [
            'form_params' => [
                'orderSn' => mt_rand(100000, 999999),
            ],
        ]);
        $this->assertJson($res->getBody()->getContents());
    }


    public function testDetail()
    {
        $c = c();
        $res = $c->post(LOAN_ORDER_DETAIL, [
            'form_params' => [
                'orderSn' => mt_rand(100000, 999999),
            ],
        ]);
        $this->assertJson($res->getBody()->getContents());
    }


    public function testPrepare()
    {
        $c = c();
        $res = $c->post(LOAN_ORDER_PREPARE, [
            'form_params' => [
                'orderSn' => mt_rand(100000, 999999),
            ],
        ]);
        $this->assertJson($res->getBody()->getContents());
    }


    public function testPreparation()
    {
        $c = c();
        $res = $c->post(LOAN_ORDER_PREPARATION, [
            'form_params' => [
                'orderSn' => mt_rand(100000, 999999),
            ],
        ]);
        $this->assertJson($res->getBody()->getContents());
    }
}