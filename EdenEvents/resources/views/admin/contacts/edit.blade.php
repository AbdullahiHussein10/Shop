@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

<div class="container">
    <div class="row">
        <div class="card align-content-center">
            <div class="card-body">
                <form method="post" action="{{ route('contact.update', ['id' => $contact->id]) }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row mt-5">
                        <div class="col">
                            {{--                            <div class="form-group"><label class="mr-3">Current Image</label><img src="assets/img/avatars/avatar1.jpeg"></div>--}}
                            <div class="form-group">
                                <label>Enter Youtube URL</label><input class="form-control @error('youtube') is-invalid @enderror"
                                                                       type="text" name="youtube" value="{{ $contact->youtube }}">
                            </div>

                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group"><label>Enter Twitter URL</label><input class="form-control"
                                                                                       type="text" name="twitter" value="{{ $contact->twitter }}"></div>

                    </div>
                    <div class="col">
                        <div class="form-group"><label>Enter E-mail URL</label><input class="form-control"
                                                                                      type="email" name="email" value="{{ $contact->email }}"></div>

                    </div>
                    <div class="col">
                        <div class="form-group"><label>Enter Instagram URL</label><input class="form-control"
                                                                                         type="text" name="instagram" value="{{ $contact->instagram }}">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group"><label>Enter Whatsapp Number</label><input class="form-control"
                                                                                           type="number" name="whatsapp" value="{{ $contact->whatsapp }}"
                            ></div>

                    </div>
                    <div class="col">
                        <div class="form-group"><label>Enter Facebook URL</label><input class="form-control" value="{{ $contact->facebook }}"
                                                                                        type="text" name="facebook">
                        </div>

                    </div>
                    <button class="btn btn-primary" type="submit">Update</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>

@include('admin.layouts.footer')
