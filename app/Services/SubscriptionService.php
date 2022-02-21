<?php

namespace App\Services;

use App\Models\Subscription;

class SubscriptionService
{
    public static function addUserSubscriptionFor(array $subscriptionDetails): void
    {
        Subscription::create($subscriptionDetails);
    }

    public static function removeUserFromSubscription(array $subscriptionDetails): void
    {
        Subscription::where('website_id', $subscriptionDetails['website_id'])
            ->where('email_address', $subscriptionDetails['email_address'])
            ->delete();
    }

    public static function hasAlreadySubscribed(array $subscriptionDetails): bool
    {
        return Subscription::where('website_id', $subscriptionDetails['website_id'])
            ->where('email_address', $subscriptionDetails['email_address'])
            ->exists();
    }
}
