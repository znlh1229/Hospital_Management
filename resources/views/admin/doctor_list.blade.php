{{-- --}}
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.link')
</head>

<body>
    <div class="container-scroller">

        @include('admin.sidebar')

        @include('admin.navbar')
        <div class="container-fluid page-body-wrapper ">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">


            <div class="container mt-6">
                @if (session('doctor'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success!</strong> {{ session('doctor') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <table class="table ">
                    <thead class="thead-light">
                        <tr class="">
                            <th scope="col">#</th>
                            <th scope="col">Doctor Name</th>

                            <th scope="col">Phone</th>
                            <th scope="col">Speciality</th>
                            <th scope="col">Room</th>
                            <th scope="col">Image</th>

                            <th scope="col">Action</th>






                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = '1';
                        @endphp
                        @foreach ($doctor as $data)
                            <tr class="text-white">
                                <th scope="row">{{ $no }}</th>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->phone }}</td>

                                <td>{{ $data->speciality }}</td>
                                <td>{{ $data->room }}</td>
                                <td><img src="doctorimage/{{ $data->image }}" alt=""
                                        style="width:60px;height:60px"></td>

                                {{-- <td>{{ $data->message }}</td>
                                <td>{{ $data->status }}</td> --}}
                                <td><a href="{{ url('edit_doctor', $data->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ url('delete_doctor', $data->id) }}" class="btn btn-danger"
                                        onclick="return confirm('Are you sure your want to delete ?')">Delete</a>
                                </td>

                                @php
                                    $no++;
                                @endphp
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @include('admin.script')
</body>

</html>
