@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

@if(Session::has('message'))
    <div class="alert alert-success mt-3">
        {{ Session::get('message') }}
    </div>
@endif

<div class="container">
    <a href="{{ route('service.create') }}" class="justify-content-start btn btn-success">Add Service</a>
   <div class="table-responsive mt-3">
        <table class="table">
            <thead>
            <tr>
                <th>Icon</th>
                <th>Heading</th>
                <th>Body</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach(\App\Models\Service::all() as $service)
            <tr>
                <td><img src="{{ asset('storage/services/'. $service->icon) }}" style="height:50px; width:70px"></td>
                    <td>{{ $service->heading }}</td>
                    <td>{{ $service->body }}</td>
                <td><a href="{{ route('service.edit', ['id' => $service->id]) }}" class="btn btn-secondary btn-sm px-1 mx-1" type="button"><span>Edit&nbsp;</span><i class="fa fa-edit"></i></a></td>
                <td><a href="{{ route('service.delete', ['id' => $service->id]) }}" class="btn btn-danger btn-sm px-1 mx-1" type="button"><span>Delete&nbsp;</span><i class="fa fa-trash-o"></i></a></td>

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>
@include('admin.layouts.footer')
