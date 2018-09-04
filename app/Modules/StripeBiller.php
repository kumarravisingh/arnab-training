<?php
namespace App\Modules;

use App\Interfaces\BillerInterface;
use App\Interfaces\BillingNotifierInterface;

class StripeBiller implements BillerInterface{
    public function __construct(BillingNotifierInterface $notifier)
    {
        $this->notifier  = $notifier;
    }

    /**
     * @param array $user
     * @param $amount
     */
    public function bill(array $user, $amount)
    {
        // Bill the user via stripe
        $this->notifier->notify($user,$amount);
    }
}