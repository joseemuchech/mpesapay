<?php

namespace App\Http\Controllers\payments\mpesa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class MpesaResponsesController extends Controller
{
    // public function validation(Request $request){
    //     Log::info('validation endpoint hit');
    //     Log::info($request->all());

    //     return [
    //         'ResultCode' => 0,
    //         'ResultDesc' => 'Accept Service',
    //         'ThirdPartyTransID' => rand(3000, 10000)
    //     ];
    // }

    // public function stkPush(Request $request){
    //     Log::info('STK Push endpoint hit');
    //     Log::info($request->all());

    //     return [
    //         'ResultCode' => 0,
    //         'ResultDesc' => 'Accept Service',
    //         'ThirdPartyTransID' => rand(3000, 10000)
    //     ];
    // }

    public function b2cCallback(Request $request){
        Log::info('B2C endpoint hit');
        Log::info($request->all());
        return [
            'ResultCode' => 0,
            'ResultDesc' => 'Accept Service',
            'ThirdPartyTransID' => rand(3000, 10000)
        ];
    }

    // public function transactionStatusResponse(Request $request){
    //     Log::info('transactionStatusResponse  endpoint hit');
    //     Log::info($request->all());
    //     return [
    //         'ResultCode' => 0,
    //         'ResultDesc' => 'Accept Service',
    //         'ThirdPartyTransID' => rand(3000, 10000)
    //     ];
    // }

    // public function transactionReversal(Request $request){
    //     Log::info('transactionReversal  endpoint hit');
    //     Log::info($request->all());
    //     return [
    //         'ResultCode' => 0,
    //         'ResultDesc' => 'Accept Service',
    //         'ThirdPartyTransID' => rand(3000, 10000)
    //     ];
    // }

    // public function confirmation(Request $request){
    //     Log::info('confirmation endpoint hit');
    //     Log::info($request->all());

    //     return [
    //         'ResultCode' => 0,
    //         'ResultDesc' => 'Accept Service',
    //         'ThirdPartyTransID' => rand(3000, 10000)
    //     ];
    // }

}
