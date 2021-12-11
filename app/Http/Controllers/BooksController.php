<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BooksController extends Controller
{

    /**
     * @param Request $request
     * @param BookRefinery $book
     * @return mixed
     */
    public function getAllBooks(Request $request): mixed
    {
        $query = $request->get('by') ?? 'title';
        return Book::with('genre')->orderBy($query)->paginate();

    }

    /**
     * It saves the book
     *
     * @param Request $request
     * @return JsonResponse|string
     */
    public function store(Request $request): JsonResponse|string
    {
        $request->validate([
            'title' => 'required',
            'genre_id' => 'required',
            'author' => 'required',
        ]);
        try {
            Book::updateOrcreate($request->all());
        }catch (Exception $e) {
           return  $e->getMessage();
        }

        return response()->json(['msg'=>'The book is saved']);
    }

    /**
     * This updates a record after passing some minimal validation
     *
     * @return JsonResponse|string
     */
    public function update(int $id, Request $request): JsonResponse|string
    {
        $request->validate([
            'title' => 'required',
            'genre_id' => 'required',
            'author' => 'required',
        ]);
        $book = Book::find($id);
        try {
            $book->title = $request->get('title');
            $book->author = $request->get('author');
            $book->genre_id = $request->get('genre_id');
            $book->available = $request->get('available');
            $book->save();

        }catch (Exception $e) {
            return  $e->getMessage();
        }

        return response()->json(['msg'=>'The book is updated']);
    }

    /**
     * Deletes a record
     *
     * @param $id
     * @return JsonResponse|string
     */
    public function delete($id): JsonResponse|string
    {
        try {
            Book::find($id)->delete();
        }catch (Exception $e) {
            return  $e->getMessage();
        }
        return response()->json(['msg'=>'The book has been deleted']);
    }
}
