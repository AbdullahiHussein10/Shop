@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')


<div class="container-fluid">
    <h3 class="text-dark mb-1">Home Page</h3>
</div>
<div class="container-fluid">
    <div>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item" role="presentation"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1">Header</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2">Service</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-3">About</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-4">portfolio</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-5">Contact</a></li>
            <li class="nav-item" role="presentation"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-6">Socials&nbsp;</a></li>
        </ul>
        <div class="tab-content">

            <div class="tab-pane fade" role="tabpanel" id="tab-4">
                <p>Tab content.</p>
                <form method="post" action="{{ route('portfolio.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="col">
{{--                            <div class="form-group"><label class="mr-3">Current Image</label><img src="assets/img/avatars/avatar1.jpeg"></div>--}}
                            <div class="form-group"><label>Change image&nbsp;</label><input type="file" name="imageone"></div>
                        </div>
                        <div class="col">
                           <div class="form-group"><label>Change image&nbsp;</label><input type="file" name="imagetwo"></div>
                        </div>
                        <div class="col">
                          <div class="form-group"><label>Change image&nbsp;</label><input type="file" name="imagethree"></div>
                        </div>
                    </div>
                    <div class="form-row border-secondary">
                        <div class="col">
                            <div class="form-group"><label>Change image&nbsp;</label><input type="file" name="imagefour"></div>
                        </div>
                        <div class="col">
                            <div class="form-group"><label>Change image&nbsp;</label><input type="file" name="imagefive"></div>
                        </div>
                        <div class="col">
                           <div class="form-group"><label>Change image&nbsp;</label><input type="file" name="imagesix"></div>
                        </div>
                    </div>

                        <div class="col-md-3 align-self-end"><button class="btn btn-primary" type="submit">SAVE</button></div>
                </form>
            </div>
                <div class="table-responsive mt-3 ml-2">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Twitter</th>
                            <th>Facebook</th>
                            <th>Instagram</th>
                            <th>whatsapp</th>
                            <th>Email</th>
                            <th>Youtube</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            @foreach (\App\Models\Contact::all() as $item)
                            <td>{{ $item->twitter }}</td>
                            <td>{{ $item->facebook }}</td>
                            <td>{{ $item->instagram }}</td>
                            <td>{{ $item->whatsapp }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->youtube }}</td>
                            <td><button class="btn btn-primary" type="button">Edit</button></td>
                            @endforeach
                        </tr>
                        </tbody>
                    </table>
                </div>
                <p>Tab content.</p>
            </div>
            <div class="tab-pane fade" role="tabpanel" id="tab-6">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Twitter</th>
                            <th>Facebook</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Cell 1</td>
                            <td>Cell 2</td>
                            <td><button class="btn btn-primary" type="button">Edit</button></td>
                        </tr>
                        <tr>
                            <td>Cell 3</td>
                            <td>Cell 4</td>
                            <td>Cell 7</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@include('admin.layouts.footer')

