<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/18
 * Time: 9:59
 */

namespace app;


use extend\middleware\Auth;

class AuthController extends BaseController
{
    protected $middleware = [
        Auth::class,
    ];
}