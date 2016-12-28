<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'master-client/remove-wedding-guest',
        'master-client/edit-wedding-guest',
        'master-client/remove-wedding-guest',
        'master-client/edit-wedding-guest',
        'master-client/get-updated-guest-data',
        'master-client/update_wedding_guest',
        'master-client/get-last-group-category-data',
        'master-client/get_all_wedding_category',
        'master-client/get_all_wedding_guests',
        'test_ajax',
    ];
}
