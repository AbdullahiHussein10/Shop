<?php

namespace App\Http\Controllers;

use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeaderController extends Controller
{
    public function index()
    {
        return view('admin.header.index');
    }

    public function create()
    {
        return view('admin.header.create');
    }

    public function storeVideoUrl(Request $request)
    {
        $this->validate($request, [
            'url' => 'required|url',
            'image' => 'required|mimes:png,jpg,jpeg'
        ]);

        if(strlen($request->url) > 11)
        {
            if (preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $request->url, $match))
            {
                $data1 = $match[1];
            }
            else
                return false;
        }

        $data = array();
        $data['url'] = $data1;
        $data['image'] = $request->file('image')->store('public/headers');

        $image = $request->file('image');
        $img = rand() . '.' . $image->getClientOriginalExtension();
        $path = $request->file('image')->storeAs('headers', $img, 'public');
        $data['image'] = $img;

        Header::create($data);

        return redirect()->route('headers')->with('message', 'successfully Uploaded Data');

    }

    public function edit($id)
    {
        $header = Header::findorFail($id);
        return view('admin.header.edit', compact('header'));
    }

    public function update(Request $request, $id)
    {
        $header = Header::findorFail($id);

        $oldimg = Storage::path($header->image);

        $data = array();

        $data['url'] = $request->url;
        $newimg = $request->file('image');
        if ($newimg) {
            Storage::disk('public')->delete("headers" . $oldimg);
            $image = $request->file('image');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $path = $request->file('image')->storeAs('headers', $img, 'public');
            $data['image'] = $img;

            $header->update($data);

        }

        return redirect()->route('headers')->with('message', 'successfully updated Data');

    }

    public function destroy($id)
    {
        $header = Header::findorFail($id);
        $header->delete();

        return redirect()->route('headers')->with('message', 'successfully deleted Data');
    }
}
