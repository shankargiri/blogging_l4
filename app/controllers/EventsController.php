<?php
use Acme\Forms\AddEventsForm;
class EventsController extends \BaseController {

    /**
	 * Display a listing of the resource.
	 * GET /events
	 *
	 * @return Response
	 */
	public function index()
	{
		$events = Eventadd::orderBy('date', 'asc')->get();
        return View::make('events.index', compact('events'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /events/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /events
	 *
	 * @return Response
	 */
	public function store()
	{
        $validator = Eventadd::validate(Input::all());

        if($validator->passes()){
            $date = Input::get('date');
            $date = date("Y-m-d", strtotime($date));
            $event = new Eventadd;
            $event->event = Input::get('event');
            $event->venue = Input::get('venue');
            $event->address = Input::get('address');
            $event->zip = Input::get('zipcode');
            $event->date = $date;
            $event->save();
        }
          return Redirect::home();
	}

	/**
	 * Display the specified resource.
	 * GET /events/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /events/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /events/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /events/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}