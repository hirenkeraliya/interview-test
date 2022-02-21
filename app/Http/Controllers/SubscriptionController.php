<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscriptionValidation;
use App\Services\SubscriptionService;

class SubscriptionController extends Controller
{
    public function subscribe(SubscriptionValidation $request): array
    {
        $validatedData = $request->validated();

        if (SubscriptionService::hasAlreadySubscribed($validatedData)) {
            return [
                'status' => false,
                'message' => 'User has already subscribed for this website.',
            ];
        };

        SubscriptionService::addUserSubscriptionFor($validatedData);

        return [
            'status' => true,
            'message' => 'User subscribed successfully.',
        ];
    }

    public function unsubscribe(SubscriptionValidation $request): array
    {
        $validatedData = $request->validated();

        if (! SubscriptionService::hasAlreadySubscribed($validatedData)) {
            return [
                'status' => false,
                'message' => 'User has not subscribed for this website.',
            ];
        };

        SubscriptionService::removeUserFromSubscription($validatedData);

        return [
            'status' => true,
            'message' => 'User unsubscribed successfully.',
        ];
    }
}
