<?php

namespace App\Http\Controllers;

use App\Http\Requests\ThemeUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class ThemeController extends Controller
{
    public function update(ThemeUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());
        $request->user()->save();

        return Redirect::route('profile.edit');
    }
}
