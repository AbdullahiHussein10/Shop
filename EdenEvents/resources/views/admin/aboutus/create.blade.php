@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

<div class="container">
    <h4 class="badge badge-success">About Details</h4>
    <form action="{{ route('aboutus.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Category</label>
            <select class="form-control @error('imageonecategory') is-invalid @enderror" name="category_id">Select
                Category>
                @foreach(\App\Models\Category::all() as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        @error('category_id')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group"><label>Subcategory</label><input type="text"
                                                                 class="form-control @error('subcategory') is-invalid @enderror"
                                                                 name="subcategory"></div>
        @error('subcategory')
        <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group"><label>Title</label><input type="text" style="text-transform: capitalize"
                                                                 class="form-control @error('title') is-invalid @enderror"
                                                                 name="title"></div>
        @error('title')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group"><label>Image</label><input type="file"
                                                           class="form-control @error('image') is-invalid @enderror"
                                                           name="image"></div>
        @error('image')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group"><label>Details</label><textarea
                class="form-control @error('detail') is-invalid @enderror" rows="4"
                name="detail"></textarea></div>
        @error('detail')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="col-md-3 align-self-end">
            <button class="btn btn-primary mt-2" type="submit">SAVE</button>
        </div>
    </form>
</div>


@include('admin.layouts.footer')

