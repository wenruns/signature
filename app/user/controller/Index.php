<?php

namespace app\user\controller;

use app\BaseController;
use think\facade\Route;
use think\facade\View;

class Index extends BaseController
{

    public function index()
    {
        $user = cmf_get_current_user();
        if ($user) {
            $this->assign('is_login', 1);
        } else {
            $this->assign('is_login', 0);
        }
        $this->assign([
            'login_url' => url('user_login')->build(),
        ]);
        return $this->fetch();
    }


}
