<?php namespace App\Factory;

use App\Factory\Interfaces\FactoryEndpointsInterface;
use App\Factory\Objects\CursosActions;

class FactoryEndpoints implements FactoryEndpointsInterface
{
    public $endpoints = [
        'CursosActions' => true
    ];

    public function CursosActions($validator)
    {
        return new CursosActions($validator);
    }
}