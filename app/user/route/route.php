<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2020/3/31
 * Time: 16:46
 */

use think\facade\Route;

//Route::get('think', function () {
//    return 'hello,ThinkPHP6!';
//});

Route::any('/', '@user/index/index');
Route::get('/login', 'user/login/index')->name('user_login');
Route::any('is_login', 'user/login/isLogin')->name('is_login');