<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Person;
use Illuminate\Http\JsonResponse;
use Zolex\VOM\Serializer\VersatileObjectMapper;

class ExampleController extends Controller
{
    public function __construct(private VersatileObjectMapper $objectMapper)
    {
    }

    public function normalizePerson(): JsonResponse
    {
        $objectMapper = resolve(VersatileObjectMapper::class);
        $objectMapper = app(VersatileObjectMapper::class);

        $person = new Person();
        $person->firstname = 'Peter';
        $person->lastname = 'Parker';
        $person->address = new Address();
        $person->address->city = 'Koblemz';
        $person->address->street = 'Examplestreet 1';
        $person->address->country = 'Germany';
        $person->address->zipCode = '506070';

        $normalized = $this->objectMapper->normalize($person);

        return response()->json($normalized);
    }
}
