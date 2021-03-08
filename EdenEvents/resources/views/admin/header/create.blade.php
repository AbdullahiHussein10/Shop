@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

    @if(Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif
<div class="container">
    <h4 class="badge badge-info">Video</h4>
    <form action="{{ route('upload.video') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    <label>Video Url:</label>
                    <input class="form-control @error('url') is-invalid @enderror" type="text" name="url"></div>
                @error('url')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col">
                <div class="form-group"><label>Background Picture</label><input type="file" name="image" class="w-100 form-control @error('image') is-invalid @enderror"></div>
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="col align-self-center">
                <div class="form-group mt-4"><button class="btn btn-primary" type="submit">Save</button></div>
            </div>
        </div>
    </form>
</div>
@include('admin.layouts.footer')
