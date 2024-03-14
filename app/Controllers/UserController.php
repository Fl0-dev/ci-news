<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    public function register()
    {
        helper('form');

        return view('templates/header')
            . view('user/register')
            . view('templates/footer');
    }

    public function attemptRegister()
    {
        $data = [
            'email' => $this->request->getPost('email'),
            'firstname' => $this->request->getPost('firstname'),
            'lastname' => $this->request->getPost('lastname'),
            'password' => $this->request->getPost('password'),
            'passwordConfirm' => $this->request->getPost('passwordConfirm'),
        ];

        $rules = [
            'email' => 'required|valid_email|is_unique[users.email]',
            'firstname' => 'required',
            'lastname' => 'required',
            'password' => 'required|min_length[8]',
            'passwordConfirm' => 'required|matches[password]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->to('/register')->withInput()->with('errors', $this->validator->getErrors());
        };

        if (is_string($data['password'])) {
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
        } else {
            return redirect()->to('/register')->withInput()->with('errors', ['password' => 'Invalid password format.']);
        }

        $model = model(UserModel::class);

        if (!$model->save($data)) {
            return redirect()->to('/register')->withInput()->with('errors', $model->errors());
        }

        return redirect()->to('/login');
    }

    public function login()
    {
        helper('form');

        return view('templates/header')
            . view('user/login')
            . view('templates/footer');
    }

    public function attemptLogin()
    {
        // TODO
    }

    public function profile()
    {
        // TODO
    }

    public function updateProfile()
    {
        // TODO
    }

    public function logout()
    {
        // TODO
    }
}