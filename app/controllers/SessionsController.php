<?php
use Acme\Forms\LoginForm;
class SessionsController extends \BaseController {

    protected $loginForm;

    function __construct(LoginForm $loginForm)
    {
        $this->loginForm = $loginForm;
    }

    public function create()
	{
		return View::make('sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sessions
	 *
	 * @return Response
	 */
	public function store()
	{
	     $input = Input::only('email', 'password');

        if(Auth::attempt($input)){
           return Redirect::intended('/');
        }
        return Redirect::to('login');

	}
	/**
	 * Remove the specified resource from storage.
	 * DELETE /sessions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id=null)
	{
		Auth::logout();
        return Redirect::home();
	}

}