<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Restaurant;
use Illuminate\Http\Request;

class commentController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function listComment() {
		$comment = Comment::all();
		$restaurant = Restaurant::all();
		return view('page.action_admin.comment.list', compact('comment', 'restaurant'));
	}

	public function createComment() {
		return view('page.action_admin.restaurant.show');
	}


	public function postComment(Request $request, $restaurantId) {

		$comment = new Comment();
		$comment->restaurant_id = $restaurantId;
		$comment->content = $request->content;
		$comment->user_id = auth()->user()->id;

		$comment->save();

		return redirect()->back();
	}

}
