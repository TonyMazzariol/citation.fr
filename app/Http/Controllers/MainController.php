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

        return view('HomePage', [
            'author' => $this->getAuthorFullName($quote->authors_id)->first(),
            'quote' => $quote
        ]);
    }

    public function authors()
    {
        return view('Authors');
    }
}
