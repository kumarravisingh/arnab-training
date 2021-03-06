<?php
namespace App\Modules;

use App\Interfaces\BillingNotifierInterface;
use Illuminate\Support\Facades\Log;

class LogNotifier {
    public function notify(array $user, $amount)
    {
        Log::info('notified the user via log');
    }
}