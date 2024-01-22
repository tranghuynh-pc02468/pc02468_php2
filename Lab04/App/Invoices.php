<?php

namespace App;

class Invoices
{
    public static function index(): string
    {
        return '<h2>invoices</h2>';
    }

    public static function create(): string
    {
        return '<h2>Create invoices</h2>';
    }
}
