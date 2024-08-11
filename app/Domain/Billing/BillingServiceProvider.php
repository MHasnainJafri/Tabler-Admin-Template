<?php

namespace App\Domain\Billing;

use Illuminate\Support\ServiceProvider;
use App\Domain\Billing\Services\BillingService;
use App\Domain\Billing\Repositories\SubscriptionRepository;

class BillingServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(SubscriptionRepository::class, YourConcreteSubscriptionRepository::class);
        $this->app->singleton('billing', BillingService::class);
    }
}
