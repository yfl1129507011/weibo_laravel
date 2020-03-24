<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    const VIEW_FILE_ROOT = 'static_pages/';

    // 首页静态页
    public function home()
    {
        return view(self::VIEW_FILE_ROOT . __FUNCTION__);
    }
    // 帮助静态页
    public function help()
    {
        return view(self::VIEW_FILE_ROOT . __FUNCTION__);
    }
    // 关于静态页
    public function about()
    {
        return view(self::VIEW_FILE_ROOT . __FUNCTION__);
    }
}
