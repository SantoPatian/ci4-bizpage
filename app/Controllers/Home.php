<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home/index');
    }

    public function terms_services()
    {
        $data['active'] = 'terms_services';

        return view('home/terms_services', $data);
    }

    public function privacy_policy()
    {
        $data['active'] = 'privacy_policy';

        return view('home/privacy_policy', $data);
    }

    public function user_agreement()
    {
        $data['active'] = 'user_agreement';

        return view('home/user_agreement', $data);
    }
}
