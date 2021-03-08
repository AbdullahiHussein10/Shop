@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

<div class="container">
    <h4>Who We Are</h4>
    <form action="{{ route('aboutus.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group"><input type="text" class="form-control @error('imagethreecategory') is-invalid @enderror" name="imagethreecategory"></div>
        @error('imagethreecategory')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group"><input type="text" class="form-control @error('imagethreesubcategory') is-invalid @enderror" name="imagethreesubcategory"></div>
        @error('imagethreesubcategory')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group"><input type="file" class="form-control @error('imagethree') is-invalid @enderror" name="imagethree"></div>
        @error('imagethree')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group"><textarea class="form-control @error('imagethreedetail') is-invalid @enderror" rows="4" name="imagethreedetail"></textarea></div>
        @error('imagethreedetail')
        <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="col-md-3 align-self-end"><button class="btn btn-primary mt-2" type="submit">SAVE</button></div>
    </form>
</div>


@include('admin.layouts.footer')
