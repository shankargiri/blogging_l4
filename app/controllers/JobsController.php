<?php

class JobsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /jobs
	 *
	 * @return Response
	 */
	public function index()
	{
        $jobs = Job::all();
        return View::make('jobs.index', compact('jobs'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /jobs/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('jobs.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /jobs
	 *
	 * @return Response
	 */
	public function store()
	{
        $validate = Job::validate(Input::all());
        if($validate->fails()){
            return Redirect::to('jobs/create')->withError($validate)->withInput(Input::all());
        }else{
            $job = new Job;
            $job->job_type = Input::get('jobtype');
            $job->description = Input::get('description');
            $job->name = Input::get('name');
            $job->email = Input::get('email');
            $job->phone = Input::get('phone');
            $job->address = Input::get('address');

            $job->save();

        }
        return Redirect::home();
	}


	public function show($id)
	{
        $job = Job::find($id);
        return View::make('jobs.show', compact('job'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /jobs/{id}/edit
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
	 * PUT /jobs/{id}
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
	 * DELETE /jobs/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}