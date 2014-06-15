<?php
use Acme\Forms\ReplyForm;
class CommentsController extends \BaseController {

    protected $replyform;

    function __construct(ReplyForm $replyform)
    {
        $this->replyform = $replyform;
    }

    public function store()
	{
		$input = Input::only('reply', 'thread_id');
        if($this->replyform->validate($input)){

            $comment = Comment::create($input)->with('message', 'Successfully Replied!');
            return Redirect::home();
        }
        else{
            return Redirect::to('/comments')->with('msg', 'Something went wrong')->withInput();
        }


	}

}