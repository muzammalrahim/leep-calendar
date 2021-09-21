<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\events;

use App\Models\Comments;

class CommentsController extends Controller
{
    //


    public function addComment(Request $request){
        $data = $request->toArray();
        $user = Auth::user();
        $events = events::find($data['event_id']);
        if ($events) {
            $comments = new Comments;
            $comments->event_id = $data['event_id'];
            $comments->comment = $data['comment'];
            $comments->user_id = $user->id;
            $comments->save();
            return response()->json([
                'status' => 1,
                'message' => 'Comment added successfully'
            ]);
        }
        else{
            dd('nothing here');
        }
        
    }
}
