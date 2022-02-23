<?php

namespace App\Http\Controllers;

use App\Models\Quotes;
use App\Models\Authors;
use App\Http\Requests\StoreAuthorsRequest;
use App\Http\Requests\UpdateAuthorsRequest;


class AuthorController extends Controller
{
    public function author($id) {

        $author = ($this->getAuthorFullName($id));

        // dd($id);
        // dd($author);

        $quotes = Quotes::get()->where('authors_id', $id);

        return view('Author', [
            'author' => $author,
            'quotes' => $quotes
        ]);
    }
}
