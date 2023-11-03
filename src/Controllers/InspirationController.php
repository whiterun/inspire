<?php

namespace Whiterun\Inspire\Controllers;

use Illuminate\Http\Request;
use Whiterun\Inspire\Inspire;

class InspirationController
{
    public function __invoke(Inspire $inspire)
    {
        $quote = $inspire->justDoIt();

        return view('inspire::index', compact('quote'));
    }
}
