<?php

defined('BASEPATH') or exit('No direct script access allowed');


class HelloController extends CI_Controller
{

    public function index()
    {
        echo 'Hello World';
    }

    public function test()
    {
        $data = [
            'name' => 'Denny Mario',
            'age' => 24
        ];

        echo $data['name'];
    }
}
