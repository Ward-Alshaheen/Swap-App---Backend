<?php

namespace App\GraphQL\Schemas;

use Rebing\GraphQL\Support\Contracts\ConfigConvertible;

class DefaultSchema implements ConfigConvertible
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
            ],
            // Laravel HTTP middleware
            'middleware' => ['app_lang:api'],

            // Which HTTP methods to support; must be given in UPPERCASE!
            'method' => ['GET', 'POST'],

            // An array of middlewares, overrides the global ones
            'execution_middleware' => null,
        ];
    }
}
