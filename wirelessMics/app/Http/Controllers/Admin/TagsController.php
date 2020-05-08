<?php

namespace App\Http\Controllers\Admin;

use App\Tag;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as validator;
use Illuminate\Database\Eloquent\Builder;

class TagsController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }


     public function index()
	{   #retrieve all tags
        $tags = Tag::all();

		return View ('admin.tags.index')
		->with(['tags'=> $tags]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create(Request $request)
	{
        return View ('admin.tags.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request, Tag $tag)
	{


        $request->validate([
            'name' => 'required|unique:tags,name',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);

		$tag = new Tag();
        $tag->name = $request->name;
        $tag->created_at = $request->created_at;
        $tag->updated_at = $request->updated_at;
		$tag->save();

		return redirect()->route('admin.tags.index')
			->with('status','The tag been added.');

	}


	public function edit(Tag $tag)
	{
       $tag = Tag::where('id', '=', $tag->id)->first();

       //ddd($tag);

		# Pass with the $tag object so we can do model binding on the form
		return View('admin.tags.edit')
		->with('tag', $tag);
	}


	public function update( Request $request, Tag $tag)
    {
        $tag = Tag::where('id', '=', $tag->id)->first();

         $request->validate([
            'name' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);

        $tag->name = $request->name;
        $tag->created_at = $request->created_at;
        $tag->updated_at = $request->updated_at;
        $tag->save();


		return redirect()->route('admin.tags.index')
		->with('status','The Tag has been saved.');
	}

     public function delete(Tag $tag)
    {
             $tag = Tag::where('id', '=', $tag->id)->first();
           // ddd($tag);

            if (!$tag) {
                return redirect()->route('admin.tags.index')->with([
                    'status' => 'tag not found'
                ]);
            }

            return view('admin.tags.delete')->with([
                'tag' => $tag
            ]);
    }


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Tag $tag)
	{
        $tag = Tag::where('id', '=', $tag->id)->first();

        $tag->delete();

		return redirect()->route('admin.tags.index')
		->with('status','The Tag has been deleted.');
	} //
}
