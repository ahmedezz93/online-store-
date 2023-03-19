<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Http\Services\FatoorahServices;
use App\Models\cartlist;
use App\Models\Order;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    private $FatoorahServices;




public function __construct(FatoorahServices $FatoorahServices)
{
      $this->FatoorahServices=$FatoorahServices;
}



public function proceed_payment(Request $request){

    $amount=$request->amount;
   return view('site.cart.payments',compact('amount'));
}

    public function order_payment(Request $request){


          $data = [
            //Fill required data
            'NotificationOption' => 'Lnk', //'SMS', 'EML', or 'ALL'
            'InvoiceValue'       => $request->amount,
            'CustomerName'       => auth()->user()->name,
                //Fill optional data
                'DisplayCurrencyIso' => 'SAR',
                'MobileCountryCode'  => '+20',
                'CustomerMobile'     => auth()->user()->mobile,
                'CallBackUrl'=> 'http://127.0.0.1:8000/ar/get_payment_error',
                 'ErrorUrl' => 'http://127.0.0.1:8000/ar/get_payment_callback',

                //'InvoiceItems'       => $invoiceItems,
        ];


        return  $this->FatoorahServices->sendpayment($data);

    }

public function get_payment_callback(Request $request){

$data=[];
$data['key']=$request->paymentId;
 $data['keytype']='paymentId';
   $payment_data= $this->FatoorahServices->getPaymentStatus($data);


 foreach($payment_data['Data']['InvoiceTransactions'] as $value){


    Order::create([

        "user_id"=>auth()->user()->id,
        "username"=>$payment_data['Data']['CustomerName'],
        "mobile"=>$payment_data['Data']['CustomerMobile'],
        "InvoiceId"=>$payment_data['Data']['InvoiceId'],
        "TransactionId"=>$value['TransactionId'],
        "PaymentId"=>$value['PaymentId'],
        "PaidCurrencyValue"=>$value['PaidCurrencyValue'],
        "TransationValue"=>$value['TransationValue'],
        "PaymentGateway"=>$value['PaymentGateway'],

         ]);
         }

         cartlist::where('user_id',auth()->user()->id)->delete();
flash()->addsuccess(' تمت عمليه الدفع بنجاح');
return redirect()->route('home');

}


public function get_payment_error(){

    flash()->adderror('عملية غير ناجحه');
    return redirect()->route('home');

}
}
