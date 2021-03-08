@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

@if(Session::has('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
@endif
<div class="container">
    <h4>Video</h4>
    <form action="{{ route('service.update', ['id' => $service->id]) }}" method="post" enctype="multipart/form-data" id="myform">
        @csrf
        <div class="form-row">
            <div class="col">
                <div class="form-group"><label>Icon</label><input class="form-control" type="file" name="icon" ></div>
            </div>
            <div class="col">
                <div class="form-group"><label>Heading</label><input class="form-control" type="text" name="heading" value="{{ $service->heading }}"></div>
            </div>
            <div class="col">
                <div class="form-group"><label>Body</label><input class="form-control" type="text" name="body" value="{{ $service->body }}"></div>
            </div>
            <div class="col align-self-center">
                <div class="form-group mt-4"><button class="btn btn-primary" type="submit">Update</button></div>
            </div>
        </div>
    </form>
</div>


@include('admin.layouts.footer')

