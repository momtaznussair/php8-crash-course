<?php

// class User {
//     protected $name;

//     public function __construct($name) {
//         $this->name = $name;
//     }
// }

// class Plan {
//     protected $name;

//     public function __construct($name) {
//         $this->name = $name;
//     }
// }

// class SignUp {
//     protected $user;
//     protected $plan;

//     public function __construct(User $user, Plan $plan) {
//         $this->user = $user;
//         $this->plan = $plan;
//     }
// }

class User {
    public function __construct(protected string $name) {
    }
}

class Plan {
    public function __construct(protected string $name) {
    }
}

class SignUp {
    public function __construct(protected User $user, protected Plan $plan) {
    }
}

$user = new User('Momtaz Nussair');
$plan = new Plan('Monthly');

$signup = new SignUp($user, $plan);

var_dump($signup);