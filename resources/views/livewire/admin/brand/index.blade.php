     <div class="row">
        <div class="col-md-12">

            @if (session('message'))
                    <div class="alert alert-success">{{ session('message') }}</div>
                @endif

            <div class="card">
                <div class="card-header">
                    <h4>
                        Brand Lists
                        <a href="{{ url('admin/brands/create') }}" class="btn btn-primary btn-sm float-end">Add Brands</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-stiped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($brands as $brand)
                            <tr>
                                <td>{{ $brand ->id }}</td>
                                <td>{{ $brand ->name }}</td>
                                <td>{{ $brand ->slug }}</td>
                                <td>{{ $brand ->status == '1' ? 'Hidden':'Visible' }}</td>
                                <td>
                                    <form action="{{route('admin.brand.delete', $brand->id)}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{ url('admin/brands/'.$brand->id.'/edit') }}" class="btn btn-success">Edit</a>
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@push('script')

<script>
    window.addEventListener('close-modal', event => {

        $('#addBrandModal').modal('hide');
    });
</script>
@endpush
