<?php

namespace App\GraphQL\Schemas;

use Rebing\GraphQL\Support\Contracts\ConfigConvertible;
use Rebing\GraphQL\Support\UploadType;

class AuthSchema implements ConfigConvertible
{
    public function toConfig(): array
    {
        return [
            'query' => [
                // ExampleQuery::class,
            ],

            'mutation' => [
                // ExampleMutation::class,
            ],

            'types' => [
                // ExampleType::class,
                UploadType::class,

            ],
            // Laravel HTTP middleware
            'middleware' => ['auth_user:api','app_lang:api','last_seen'],

            // Which HTTP methods to support; must be given in UPPERCASE!
            'method' => ['GET', 'POST'],
        ];

    }
}
