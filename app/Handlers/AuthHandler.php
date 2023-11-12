<?php

namespace App\Handlers;

use App\Models\User;

class AuthHandler{

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function getUserByEmail($email)
    {
        return $this->user->where('email', $email)->first();
    }

    public function changeUserPassword($id, $password)
    {
        return $this->user->find($id)->update([
            'password' => $password
        ]);
    }
}

?>