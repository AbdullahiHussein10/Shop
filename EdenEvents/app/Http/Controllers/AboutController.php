<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.aboutus.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.aboutus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
            'subcategory' => 'required',
            'image' => 'required',
            'detail' => 'required',
            'title' => 'required'
        ]);

        $data = array();

        $data['category_id'] = $request->category_id;
        $data['subcategory'] = $request->subcategory;
        $data['detail'] = $request->detail;
        $data['title'] = ucwords($request->title);

        $image = $request->file('image');
        $imgone = rand() . '.' . $image->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('about', $imgone, 'public');
        $data['image'] = $imgone;

        About::create($data);

        return redirect()->route('aboutus.index')->with('message', 'Data added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about, $id)
    {
        $about = About::findorFail($id);
        $about->delete();

        return redirect()->route('aboutus.index')->with('message', 'Data deleted successfully');
    }

    public function filter()
    {
        $whoweare = About::where('title', '=', 'Who We Are')->select('image', 'category_id', 'subcategory','detail')->get();
        $whychooseus = About::where('title', '=', 'Why Choose Us')->select('image', 'category_id', 'subcategory','detail')->get();
        $whywestandout = About::where('title', '=', 'Why We Stand Out')->select('image', 'category_id', 'subcategory','detail')->get();

        return view('frontend.about', compact('whoweare', 'whychooseus', 'whywestandout'));
    }
}
