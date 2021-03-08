@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

<div class="container">
    <h4>Team</h4>
    <form action="{{ route('teams.store') }}" method="post" enctype="multipart/form-data">
        @csrf
<div class="form-group"><label>Name</label><input type="text" class="form-control @error('name') is-invalid @enderror" name="name"></div>
@error('name')
<span class="text-danger">{{ $message }}</span>
@enderror
<div class="form-group"><label>Facebook</label><input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook"></div>
@error('facebook')
<span class="text-danger">{{ $message }}</span>
@enderror
        <div class="form-group"><label>Twitter</label><input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter"></div>
        @error('twitter')
        <span class="text-danger">{{ $message }}</span>
        @enderror
        <div class="form-group"><label>Instagram</label><input type="text" class="form-control @error('instagram') is-invalid @enderror" name="instagram"></div>
        @error('instagram')
        <span class="text-danger">{{ $message }}</span>
        @enderror
<div class="form-group"><label>Image</label><input type="file" class="form-control @error('image') is-invalid @enderror" name="image"></div>
@error('image')
<span class="text-danger">{{ $message }}</span>
@enderror
<div class="form-group"><textarea class="form-control @error('description') is-invalid @enderror" rows="4" name="description"></textarea></div>
@error('description')
<span class="text-danger">{{ $message }}</span>
@enderror

<div class="col-md-3 align-self-end"><button class="btn btn-primary mt-2" type="submit">SAVE</button></div>
</form>
</div>


@include('admin.layouts.footer')
