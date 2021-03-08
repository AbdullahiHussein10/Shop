
@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

@if(Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
@endif
<div class="container">
    <h4 class="badge badge-info">Portfolio</h4>
    <form method="post" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="col">
              <div class="form-group"><label>Image</label><input type="file" class="form-control" name="image"></div>
            </div>
            <div class="col">
                <div class="form-group"><label>Category</label><select class="form-control" type="text" name="category_id">
                        @foreach(\App\Models\Category::all() as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select></div>

            </div>
            <div class="col">
                <div class="form-group"><label>Subcategory</label><input class="form-control" type="text" name="subcategory"></div>
            </div>
            <div class="col-md-3 align-self-end"><button class="btn btn-primary mb-3" type="submit">SAVE</button></div>
        </div>

    </form>
</div>
<div class="container">
    <div class="table-responsive mt-3">
        <table class="table">
            <thead>
            <tr>
                <th>Icon</th>
                <th>Category</th>
                <th>Subcategory</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach (\App\Models\Portfolio::all() as $item)
                <tr>
                    <td><img src="{{ asset('storage/portfolio/'. $item->image) }}" style="height:100px; width:150px"></td>
                    <td>{{ $item->category->name }}</td>
                    <td>{{ $item->subcategory }}</td>
                    <td><a href="{{ route('portfolio.delete', ['id' => $item->id]) }}" class="btn btn-danger btn-sm px-1 mx-1" type="button"><span>Delete&nbsp;</span><i class="fa fa-trash-o"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>


@include('admin.layouts.footer')

