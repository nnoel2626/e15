<?php

namespace App\Http\Controllers\Admin;

use App\tag;
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
	{
        $tags = Tag::all();
        //ddd($tags);

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
	public function store(Request $request)
	{
        //$request->validate([
		$validator = Validator::make(Input::all());
		if( $validator->passes()){
			$tag = new Tag();
			$tag->name = Input::get('name');
			$tag->save();

			return Redirect::to('admin.tags.index')
			->with('flash_message','Your tag been added.');
			}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	// public function show(Tag $tags)
	// {
	// 	 try {
	// 	$tag = Tag::findOrFail($id);
	// 	 }
	// 	 catch(Exception $e) {
	// 	 return Redirect::to('admin.tags')
	// 	 ->with('flash_message', 'Tag not found');
	// 	 }
	// 	 return View ('admin.tags.show')->with('tag', $tag);
	// }

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Request $request, $id)
	{
		try {
			$tag = Tag::findOrFail($id);
			}
			catch(Exception $e)
			{
        return redirect()->route('admin.tags.index')->with('status', 'Tag not found !');

		}
		# Pass with the $tag object so we can do model binding on the form
		return View('admin.tags.edit')
		->with('tag', $tag);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, Tag $tags)
	{
		try {
		$tag = Tag::findOrFail(Input::get('id'));
		}
		catch(Exception $e) {
		return Redirect::to('/admin.tags/')
		->with('flash_message', 'tag not found');
		}

		$tag->name = Input::get('name');
		$tag->save();

		return Redirect::action('TagsController@index')
		->with('flash_message','Your Tag has been saved.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Request $request, $id)
	{
		try {
		$tag = Tag::findOrFail(Input::get('id'));
		}
		catch(Exception $e) {
		return Redirect::to('/admin.tags/')
		->with('flash_message', 'Tag not found');
		}
		# Note there's a `deleting` Model event which makes sure
		//category_equipmemt entries are also destroyed
		# See Category.php for more details
		Tag::destroy(Input::get('id'));

		return Redirect::action('TagsController@index')
		->with('flash_message','Your Tag has been deleted.');
	} //
}
