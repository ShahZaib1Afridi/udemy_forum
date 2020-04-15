<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Discussion;
use Session;
class DiscussionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('discuss');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'channel_id' => 'required',
            'content' => 'required',
            'title' => 'required'
        ]);


        // $discussion = Discussion::create([
        //     'title' => $request->title,
        //     'content' => $request->content,
        //     'channel_id' => $request->channel_id,
        //     'user_id' => Auth::id(),
        //     'slug'   => str_slug($request->title)
        // ]);

        $discussion = new Discussion;
        $discussion->title = $request->title;
        $discussion->content = $request->content;
        $discussion->channel_id = $request->channel_id;
        $discussion->user_id = Auth::id();
        $discussion->slug = str_slug($request->title);
        $discussion->save();

        Session::flash('success','Discussion Successfully created');
        return redirect()->back('discussion', ['slug' => $discussion->slug]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $discussion = Discussion::where('slug', $slug)->first();
        return view('discussions.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
