<?php
namespace TinyURL\Repository;
use illuminate\Support\ServiceProvider;

class TinyUserRepositoryProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('TinyURL\Repository\User\DbUserRepository', function (){
            return new \TinyURL\Repository\User\DbUserRepository(new \User);
        });
    }
}