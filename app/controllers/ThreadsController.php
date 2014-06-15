<?php

use \Acme\Forms\CreateThread;
class ThreadsController extends \BaseController {



    private $createThread;

    function __construct(CreateThread  $createThread)
    {
        $this->createThread = $createThread;
    }

	public function index()
	{

      $query = Request::get('q');

        if($query)
        {
            $threads = Thread::where('topic', 'LIKE', "%$query%")->orderBy('created_at', 'DESC')->get();
        }
        else
        {
            $threads = Thread::orderBy('created_at', 'desc')->paginate(5);
        }
        $tags = Tag::all();
        $users = User::all();


		return View::make('threads.index', compact('threads', 'tags', 'users'));

	}

	public function store()
	{
        $validator = Thread::validate(Input::all());
        if($validator->passes()){
            $thread = new Thread;
            $thread->topic = Input::get('topic');
            $thread->tag_id = Input::get('tag_id');
            $thread->user_id = Input::get('user_id');
            $thread->save();
        }
        return Redirect::home();
	}
	public function show($id)
	{
        $users = User::all();
		$thread = Thread::with('user')->find($id);
        $comments = Comment::where('thread_id', '=', $id)->get();
        return View::make('threads.show', compact('thread', 'comments', 'users'));
	}
}