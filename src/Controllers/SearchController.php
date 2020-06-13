<?php

namespace Mawdoo3\Drsk\Auth\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mawdoo3\Drsk\Auth\Models\SavedResult;
use Mawdoo3\Drsk\Auth\Auth;
class SearchController extends Controller
{
    /**
     * redirect the specified function depend on action.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return redirect to another function
     */
    public function testRoute(Request $request)
    {
        return Auth::isAuthed('ahmad');
    }
}
