<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class UserController extends Controller
{
    /**
     * @return User[]|\Illuminate\Database\Eloquent\Collection
     */
    public function allUsers()
    {
        return User::all();
    }

    public function getUserBooks(int $user_id): Collection
    {
        $user = User::find($user_id);
        return $user->books;
    }
}
