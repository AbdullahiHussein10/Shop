@include('admin.layouts.sidebar')

@include('admin.layouts.topbar')

<div class="table-responsive mt-5 ml-2">
    <a href="{{ route('contact.create') }}" class="btn btn-success justify-content-lg-start">Add Contact Details</a>
    @if(Session::has('message'))
        <div class="alert alert-success">
            {{ Session::get('message') }}
        </div>
    @endif
    <table class="table mt-2">
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
        @foreach (\App\Models\Contact::all() as $item)
        <tr>
                <td>{{ $item->twitter }}</td>
                <td>{{ $item->facebook }}</td>
                <td>{{ $item->instagram }}</td>
                <td>{{ $item->whatsapp }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->youtube }}</td>
                <td><a href="{{ route('contact.edit', ['id' => $item->id]) }}" class="btn btn-primary" type="button">Edit</a></td>
            <td><a href="{{ route('contact.delete', ['id' => $item->id]) }}" class="btn btn-danger" type="button">Delete</a></td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>

@include('admin.layouts.footer')
