<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\Game;
use App\Models\Like;

class ReviewsController extends Controller{
    
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function save(Request $request, $id)
    {
        $request->textArea = strip_tags($request->textArea);
        $rules = ['textArea' => 'required|min:2|max:255'];
        $this->validate($request,$rules);
        
        if(Game::find($id) == null){
            return redirect()->route('games');
        }
        else if(\Auth::user() == null){
            return redirect()->route('games');
        }
        
        $review = new Review();
        $review->user_id = \Auth::user()->id;
        $review->game_id = $id;
        $review->message = $request->textArea;
        $review->timestamps = now();
        
        if($review->save()){
            return back();
        }
        return redirect()->route('games');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::find($id);
        $revievs = Review::with('likes')->orderBy('created_at', 'asc')->where('game_id','=',$id)->get();
        return view('reviews',['game'=>$game,'reviews'=>$revievs]);
    }

    public function like($id)
    {
        if(\Auth::user() == null){
            return back();
        }
        
        $likes = Like::where([
            ['user_id','=', \Auth::user()->id],
            ['review_id','=',$id]
        ])->first();
        
        if($likes != null){
            $likes->delete();
            return back();
        }
                
        $like = New Like();
        $like->user_id = \Auth::user()->id;
        $like->review_id = $id;
        
        if($like->save()){
            return back();
        }
        return redirect()->route('games');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::find($id);
        if(\Auth::user()->id != $review->user_id){
            return back();
        }
        if($review->delete()){
            return back();
        }
        return redirect()->route('games');
    }
}
