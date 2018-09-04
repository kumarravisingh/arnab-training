<?php

namespace App\Http\Controllers;

use App\Interfaces\BillerInterface;
use App\Modules\LogNotifier;
use App\Modules\SmsNotifier;
use App\Modules\StripeBiller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    private $biller;
    public function __construct(BillerInterface $biller)
    {
        $this->biller = $biller;
    }

    public function billUser(){
        //$biller = new StripeBiller ( new LogNotifier() );

        App::bind('Interfaces/BillerInterface',function (){
            return new StripeBiller(App::make('BillingNotifierInterface'));
        });
        App::bind('Interfaces/BillingNotifierInterface', function (){
            return new SmsNotifier;
        });
        $this->biller->bill(array('ravi'),10);
        return 'billed';
    }
}
