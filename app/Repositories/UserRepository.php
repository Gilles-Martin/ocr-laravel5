<?php

namespace App\Repositories;

use App\User;

class UserRepository extends ResourceRepository
{

    protected $user;

    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function store(Array $inputs)
    {
        $user = new $this->user;
        $user->password = bcrypt($inputs['password']);

        $this->save($user, $inputs);

        return $user;
    }

}
