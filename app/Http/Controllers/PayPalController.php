<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Srmklive\PayPal\Services\ExpressCheckout;

class PayPalController extends Controller
{ 
    public function payment()
    {
        $data = [];

        $data["items"] = [
            [
                "name" => "Tyche-App Payment",
                "price" => 1,
                "desc" => "Description for Tyche-App Payment",
                "qty" => 1,
            ],
        ];
        $randomno = random_int(100000, 999999);;
        $data["invoice_id"] = "ty".$randomno;
        $data["invoice_description"] = "Order #{$data["invoice_id"]} Invoice";

        $data["return_url"] = route("payment.success");

        $data["cancel_url"] = route("payment.cancel");

        $data["total"] = 1;

        $provider = new ExpressCheckout();
        $provider->setCurrency('USD')->setExpressCheckout($data);
        $response = $provider->setExpressCheckout($data);

        $response = $provider->setExpressCheckout($data, true);
        

        return redirect($response["paypal_link"]);
    }
   
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function cancel()
    {
        dd('Your payment is canceled. You can create cancel page here.');
    }
  
    /**
     * Responds with a welcome message with instructions
     *
     * @return \Illuminate\Http\Response
     */
    public function success(Request $request)
    {
        $provider = new ExpressCheckout();
        $response = $provider->getExpressCheckoutDetails($request->token);
  
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            dd('Your payment was successfully. You can create success page here.');
        }
  
        dd('Something is wrong.');
    }
    
}