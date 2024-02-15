<?php

namespace App\Core;

use App\Controllers\BaseController;

class BaseRender extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    // public function renderHeader(){
    //     $this->load->render('layouts/client/header');
    // }

    // public function renderFooter(){
    //     $this->load->render('layouts/client/footer');
    // }

    public function renderAdminSidebar(){
        $this->load->render('components/sidebar');
    }

    public function renderAdminHeader(){
        $this->load->render('components/header');
    }

    public function renderAdminFooter(){
        $this->load->render('components/footer');
    }

    public function renderAdminRegister(){
        $this->load->render('account/register');
    }

    public function renderAdminForgotpassword(){
        $this->load->render('account/forgotpassword');
    }
}