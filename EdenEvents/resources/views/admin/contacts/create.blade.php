@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

<div class="container">
    <div class="row">
        <div class="card align-content-center">
            <div class="card-body">
                <form method="post" action="{{ route('contact.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row mt-5">
                        <div class="col">
                            {{--                            <div class="form-group"><label class="mr-3">Current Image</label><img src="assets/img/avatars/avatar1.jpeg"></div>--}}
                            <div class="form-group">
                                <label>Enter Youtube URL</label><input class="form-control @error('youtube') is-invalid @enderror"
                                                           type="text" name="youtube">
                            </div>
                            @error('youtube')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group"><label>Enter Twitter URL</label><input class="form-control @error('twitter') is-invalid @enderror"
                                                       type="text" name="twitter"></div>
                        @error('twitter')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <div class="form-group"><label>Enter E-mail URL</label><input class="form-control @error('email') is-invalid @enderror"
                                                       type="email" name="email"></div>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <div class="form-group"><label>Enter Instagram URL</label><input class="form-control @error('instagram') is-invalid @enderror"
                                                       type="text" name="instagram">
                        </div>
                        @error('instagram')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <div class="form-group"><label>Enter Whatsapp Number</label><input class="form-control @error('whatsapp') is-invalid @enderror"
                                                       type="number" name="whatsapp"
                                                      ></div>
                        @error('whatsapp')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col">
                        <div class="form-group"><label>Enter Facebook URL</label><input class="form-control @error('facebook') is-invalid @enderror"
                                                       type="text" name="facebook">
                        </div>
                        @error('facebook')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button class="btn btn-primary" type="submit">SAVE</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

@include('admin.layouts.footer')
