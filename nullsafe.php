<?php

class User {
    public function profile() {
        return null;
        return new Profile;
    }
}

class Profile {
    public function employment() {
        return 'Software Developer';
    }
}

$user = new User;

echo $user->profile()?->employment() ?? 'Not Found';