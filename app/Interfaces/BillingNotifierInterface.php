<?php
namespace App\Interfaces;

interface BillingNotifierInterface{
    public function notify(array $user, $amount);
}