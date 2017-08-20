<?php
namespace TinyURL\Repository\User;
use Illuminate\Support\Facades\Hash;
class DbUserRepository implements UserRepositoryInterface
{
    protected $_model;

    public function __construct($model)
    {
        $this->_model = $model;
    }

    public function create($name, $email, $password)
    {
        $user = $this->_model;
        $user->name = $name;
        $user->email = $email;
        $user->password = Hash::make($password);
        $user->remember_token = str_random(64);
        $user->save();
        return $user;
    }
}