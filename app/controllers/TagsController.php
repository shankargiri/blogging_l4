<?php

class TagsController extends \BaseController {

	public function show($id)
	{
        $threads = Thread::where('tag_id', '=', $id)->get();
        return View::make('tags.show', compact('threads'));
	}
}