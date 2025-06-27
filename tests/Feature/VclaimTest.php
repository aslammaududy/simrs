<?php

use function Pest\Laravel\getJson;

it('return successful response from vclaim')
->expect(fn() => getJson('api/vclaim/response'))
->assertSuccessful();
