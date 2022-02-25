<?php

Class User {
    public function __construct(protected string $name) {

    }
}

$obj = new User('Momtaz');

// echo get_class($obj);
echo $obj::class;