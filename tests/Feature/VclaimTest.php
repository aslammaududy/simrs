<?php

use function Pest\Laravel\getJson;


test('patient has BPJS membership')
->expect(fn() => getJson('api/vclaim/participant/123456789'))
->assertSuccessful()
->assertJson(['metaData' => [
    'code' => '200',
    'message' => 'OK'
]]);
