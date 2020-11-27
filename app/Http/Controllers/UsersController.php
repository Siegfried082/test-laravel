<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;
use Kyslik\ColumnSortable\Sortable;

class UsersController extends Controller
{
    public function index()
    {
        $utilisateurs = QueryBuilder::for(User::class)
            ->join('address', 'address.id', '=', 'users.address_id')
            ->select('users.*', 'address.*')
            ->sortable(['name'])
            ->allowedFilters(['name'])
            ->paginate(10);
        return view('index', compact('utilisateurs'));
    }


}
