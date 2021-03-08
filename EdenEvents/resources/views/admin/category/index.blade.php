@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

@if(Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
@endif
<div class="container mt-5">
    <a href="{{ route('categories.create') }}" class="justify-content-start btn btn-success mt-4">Add Category</a><br>
    <h4 class="badge badge-danger mt-5">Category</h4>
    <div class="table-responsive mt-3">
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Category</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach (\App\Models\Category::all() as $key => $category)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $category->name }}</td>
                    <td><a href="{{ route('categories.edit', ['id' => $category->id]) }}" class="btn btn-primary btn-sm px-1 mx-1" type="button"><span>Edit&nbsp;</span></a></td>
                    <td><a href="{{ route('categories.delete', ['id' => $category->id]) }}" class="btn btn-danger btn-sm px-1 mx-1" type="button"><span>Delete&nbsp;</span></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>


@include('admin.layouts.footer')
