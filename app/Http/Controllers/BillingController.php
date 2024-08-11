<?php

namespace App\Http\Controllers;

use App\Facades\BillingFacade;

class BillingController extends Controller
{
    public function createSubscription()
    {
        $userId = auth()->id(); // Assuming you're working with user authentication
        $paymentDetails = new PaymentDetails(/* your payment details */);

        $subscription = BillingFacade::createSubscription($userId, $paymentDetails);

        return response()->json(['message' => 'Subscription created successfully', 'subscription' => $subscription]);
    }
}
