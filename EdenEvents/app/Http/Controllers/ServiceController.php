<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.services.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
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
            'heading' => 'required',
            'body' => 'required',
            'icon' => 'required'
        ]);

        $data = array();

        $data['heading'] = $request->heading;
        $data['body'] = $request->body;
        $data['icon'] = $request->file('icon')->store('public/headers');

        $icon = $request->file('icon');
        $img = rand() . '.' . $icon->getClientOriginalExtension();
        $path = $request->file('icon')->storeAs('services', $img, 'public');
        $data['icon'] = $img;

        Service::create($data);


        return redirect()->route('services')->with('message', 'Service data added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service, $id)
    {
        $service = Service::findorFail($id);
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service, $id)
    {
        $service = Service::findorFail($id);

        $oldimg = Storage::path($service->icon);

        $data = array();

        $data['heading'] = $request->heading;
        $data['body'] = $request->body;
        $newimg = $request->file('icon');
        if ($newimg) {
            Storage::disk('public')->delete("services" . $oldimg);
            $icon = $request->file('icon');
            $img = rand() . '.' . $icon->getClientOriginalExtension();
            $path = $request->file('icon')->storeAs('services', $img, 'public');
            $data['image'] = $img;

            $service->update($data);
        }

        return redirect()->route('services')->with('message', 'Service data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service, $id)
    {
        $service = Service::findorFail($id);
        $service->delete();

        return redirect()->route('services')->with('message', 'Service data deleted successfully');
    }
}
