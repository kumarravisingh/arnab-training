<?php
namespace App\Interfaces;

interface BillerInterface{
    public function bill(array $user, $amount);
}