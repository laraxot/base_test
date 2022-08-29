<?php

declare(strict_types=1);

return [
    'facebook' => [
        'client_id' => '1976219272701103',
        'client_secret' => '74bf40f5687e1d29e32ed3837f953518',
        'redirect' => '/it/login/facebook/callback',
    ],
    'twitter' => [
        'client_id' => 'IgHlGiZndC9mQVI0u6M6IFtrI',
        'client_secret' => 'kCJKUxW8IBUICEi80m2JURRj6f82uIrDA7IuCWLfkLlgOgO8t4',
        'redirect' => '/it/login/twitter/callback',
    ],
    'instagram' => [
        'client_id' => null,
        'client_secret' => null,
        'redirect' => null,
    ],
    'google' => [
        'url_location_api' => 'https://maps.googleapis.com/maps/api/geocode/json',
        'maps_key' => 'AIzaSyDH_mjxDeYAeHV_ocThsU_CIvyGEq-vLYc',
        'client_id' => null,
        'client_secret' => null,
        'redirect' => null,
    ],
    'bing' => [
        'url_location_api' => 'http://dev.virtualearth.net/REST/v1/Locations',
        'maps_key' => 'AmPyO21FqVEG0gyZGxBnE_8GMb2mdFXeqEeOAh9qQnwlK7VNGKP9MThKJIV_EVby',
    ],
    'tmdb' => [
        'api_key' => '03f15a9cff6fd65a8aac23bada3b986f',
        'token' => 'eyJhbGciOiJIUzI1NiJ9.eyJhdWQiOiIwM2YxNWE5Y2ZmNmZkNjVhOGFhYzIzYmFkYTNiOTg2ZiIsInN1YiI6IjYxYjFkYmM3ZGE5ZWYyMDAxZDM2OTUwNSIsInNjb3BlcyI6WyJhcGlfcmVhZCJdLCJ2ZXJzaW9uIjoxfQ.Bu9zo-TisP-tlqj_foPoQQ15pg8b0r0F1uiOTT2KRu4',
    ],
    'mailgun' => [
        'domain' => null,
        'secret' => null,
        'endpoint' => 'api.mailgun.net',
    ],
    'postmark' => [
        'token' => null,
    ],
    'ses' => [
        'key' => '',
        'secret' => '',
        'region' => 'us-east-1',
    ],
    'mailchimp' => [
        'key' => '666',
        'lists' => [
            'subscribers' => null,
        ],
    ],
];