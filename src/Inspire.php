<?php

namespace Whiterun\Inspire;

use Illuminate\Support\Facades\Http;

class Inspire
{
    public function justDoIt(): string
    {
        $response = Http::get('https://type.fit/api/quotes')->json();

        $response = collect($response)->first();

        return $response['text'] . ' -' . $response['author'];
    }
}
