<?php

namespace App\Domain\Billing\Services;

use App\Domain\Billing\Entities\Subscription;
use App\Domain\Billing\Repositories\SubscriptionRepository;
use App\Domain\Billing\ValueObjects\PaymentDetails;
use App\Domain\Billing\Events\SubscriptionCreated;

class BillingService
{
    protected $subscriptionRepository;

    public function __construct(SubscriptionRepository $subscriptionRepository)
    {
        $this->subscriptionRepository = $subscriptionRepository;
    }

    public function createSubscription($userId, PaymentDetails $paymentDetails)
    {
        // Implement subscription creation logic

        $subscription = new Subscription($userId, $paymentDetails);

        $this->subscriptionRepository->save($subscription);

        event(new SubscriptionCreated($subscription));

        return $subscription;
    }
}
