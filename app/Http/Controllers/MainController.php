<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotes;
use App\Models\Authors;
use App\Http\Controllers\Controller;

class MainController extends Controller
{

    public function index()
    {
        $quote = Quotes::orderby('created_at', 'desc')->first();

        $id = $quote->authors_id;

        $author = Authors::find($id);

        // var_dump($quote);

        return view('HomePage', [
            'author' => $author,
            'quote' => $quote
        ]);
    }
}
