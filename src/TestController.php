<?php namespace Intagono\Test;
use App\Http\Controllers\Controller;
use App\User;

class TestController extends Controller {

    public function __construct() {
        //$this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();

        return view('intagono.test.admin')->with('users', $users);
    }
}