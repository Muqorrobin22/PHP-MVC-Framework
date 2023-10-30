<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\User;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $this->setLayout("auth");
        return $this->render('login');
    }

    public function register(Request $request)
    {
        $registerModel = new User();

        if ($request->isPost()) {
            $registerModel->loadData($request->getBody());

//            var_dump($registerModel);
//            exit;

            if ($registerModel->validate() && $registerModel->register()) {
                return "Success";
            }

            return $this->render("register", [
                'model' => $registerModel
            ]);
        }

        $this->setLayout("auth");
        return $this->render('register', [
            'model' => $registerModel
        ]);
    }
}