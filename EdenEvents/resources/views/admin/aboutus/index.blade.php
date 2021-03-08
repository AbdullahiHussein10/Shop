@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

<div class="container">

    @if(Session::has('message'))
        <div class="alert alert-success mt-2">
            {{ Session::get('message') }}
        </div>
    @endif
    <a href="{{ route('aboutus') }}" class="justify-content-start btn btn-success">Add About us details</a> <br>

        <h4 class="badge badge-info mt-5">Abouts</h4>
    <div class="table-responsive mt-3">
        <table class="table">
            <thead>
            <tr>
                <th>Image</th>
                <th>Category</th>
                <th>Subcategory</th>
                <th>Title</th>
                <th>Detail</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach(\App\Models\About::all() as $about)
                <tr>
                    <td><img src="{{ asset('storage/about/'. $about->image) }}" style="width:80px; height:80px"></td>
                    <td>{{ $about->category->name }}</td>
                    <td>{{ $about->subcategory }}</td>
                    <td>{{ $about->title }}</td>
                    <td>{{ $about->detail }}</td>
                   <td><a href="{{ route('about.delete', ['id' => $about->id]) }}" class="btn btn-danger btn-sm px-1 mx-1" type="button"><span>Delete&nbsp;</span><i class="fa fa-trash-o"></i></a></td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
@include('admin.layouts.footer')
