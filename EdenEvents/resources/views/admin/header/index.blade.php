@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

<div class="table-responsive mt-5 ml-2">
    <a href="{{ route('header.create') }}" class="btn btn-success justify-content-lg-start">Add Header Details</a>
    @if(Session::has('message'))
        <div class="alert alert-success mt-3">
            {{ Session::get('message') }}
        </div>
    @endif
    <table class="table mt-2">
        <thead>
        <tr>
            <th>Video Url</th>
            <th>Background</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach (\App\Models\Header::all() as $item)
            <tr>
                <td>{{ $item->url }}</td>
                <td><img src="{{ asset('storage/headers/'. $item->image) }}" style="height:50px; width:70px"></td>
                <td><a href="{{ route('header.edit', ['id' => $item->id]) }}" class="btn btn-primary" type="button">Edit</a></td>
                <td><a href="{{ route('header.delete', ['id' => $item->id]) }}" class="btn btn-danger" type="button">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@include('admin.layouts.footer')
