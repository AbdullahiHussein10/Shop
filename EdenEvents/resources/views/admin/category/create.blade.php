@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

<div class="container">
    <h4 class="badge badge-danger mt-5">Category</h4>
    <form method="post" action="{{ route('categories.store') }}">
        @csrf
        <div class="form-row">
            <div class="col">
                <div class="form-group"><label>Category</label><input class="form-control" type="text" name="name">
                </div>
            </div>
            <div class="col-md-3 align-self-end"><button class="btn btn-primary mb-3" type="submit">SAVE</button></div>
        </div>

    </form>
</div>

@include('admin.layouts.footer')
