@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

<div class="container">
    <h4>Video</h4>
    <form action="{{ route('header.update', ['id' => $header->id]) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label>Video Url:</label>
                    <input class="form-control" type="text" name="url" value="{{ $header->url }}"></div>
            </div>
            <div class="col">
                <div class="form-group"><label>Background Picture</label><input type="file" name="image" class="w-100 form-control"></div>
            </div>
            <div class="col align-self-center">
                <div class="form-group mt-4"><button class="btn btn-primary" type="submit">Update</button></div>
            </div>
        </div>
    </form>
</div>
@include('admin.layouts.footer')
