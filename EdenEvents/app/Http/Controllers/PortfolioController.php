<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
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
        return view('admin.portfolio.create');
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
            'image' => 'required|mimes:jpg,png,jpeg',
            'category_id' => 'required',
            'subcategory' => 'required',
        ]);


        $data = array();

        $data['category_id'] = $request->category_id;
        $data['subcategory'] = $request->subcategory;


        $image = $request->file('image');
        $imgone = rand() . '.' . $image->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('portfolio', $imgone, 'public');
        $data['image'] = $imgone;


        Portfolio::create($data);

        return redirect()->back()->with('message', 'Data added successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio, $id)
    {
        $portfolio = Portfolio::findorFail($id);
        $portfolio->delete();

        return redirect()->back()->with('message', 'Data deleted successfully');
    }

    public function filter($name)
    {
        $filter = Portfolio::where('category', '=', $name)->get();
        return $filter;
    }

}
