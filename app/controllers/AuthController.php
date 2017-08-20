<?php
use TinyURL\Repository\User\DbUserRepository;
class AuthController extends BaseController
{
    protected $userRepo;
    public function __construct(DbUserRepository $userRepository)
    {
        $this->userRepo = $userRepository;

    }

    public function getLogin()
    {
        return View::make('auth.login');
    }

    public function postLogin()
    {
        $email = Input::get('email');
        $password = Input::get('password');
        $validator = Validator::make(
            ['email' => $email, 'password' => $password],
            ['email' => 'required|email|exists:users', 'password' => 'required|min:5']
        );
        if ($validator->fails())
        {
            return Redirect::to('auth/login')->withErrors($validator);
        }
        $data = array(
            'email' => $email,
            'password' => $password
            );
            if (Auth::attempt($data))
            {
                return Redirect::intended('/');
            }
            return Redirect::to('auth/login');
    }

    public function getLogout()
    {
        Auth::logout();
        return Redirect::to('/');
    }

    public function getRegister()
    {
        return View::make('auth.register');
    }

    public function postRegister()
    {
        $name = Input::get('name');
        $email = Input::get('email');
        $password = Input::get('password');
        $password2 = Input::get('password2');
        $validator = Validator::make(
            ['name' => $name, 'email' => $email, 'password' => $password, 'password2' => $password2],
            ['name' => 'required|min:3', 'email' => 'required|email|unique:users', 'password' => 'required|min:5', 'password2' => 'same:password']
        );
        if ($validator->fails())
        {
            return Redirect::to('auth/register')->withErrors($validator);
        }

        $user =  $this->userRepo->create($name, $email, $password);
        $data = array(
            'email' => $email,
            'password' => $password
        );
        if (Auth::attempt($data))
        {
            return Redirect::intended('/');
        }
        else
        {
            echo 'ERROR';
        }

    }



}

