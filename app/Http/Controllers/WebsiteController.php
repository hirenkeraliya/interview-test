<?php

namespace App\Http\Controllers;

use App\Http\Requests\WebsiteValidation;
use App\Http\Resources\WebsiteResource;
use App\Models\Website;

class WebsiteController extends Controller
{
    public function getList(): array
    {
        $websites = Website::all();

        return [
            'websites' => WebsiteResource::collection($websites)
        ];
    }

    public function store(WebsiteValidation $request): void
    {
        Website::create($request->validated());
    }
}
