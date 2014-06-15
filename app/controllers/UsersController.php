<?php
use Acme\Forms\RegistrationForm;
class UsersController extends \BaseController {


    protected $registrationForm;

    function __construct(RegistrationForm $registrationForm)
    {
        $this->registrationForm = $registrationForm;
    }
	public function create()
	{
        if(Auth::check()) return Redirect::home();
		return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::only('username', 'email', 'password', 'password_confirmation');
//        $this->registrationForm->validate($input);

        $user = User::create($input);
        Auth::login($user);
        return Redirect::home();
	}

}