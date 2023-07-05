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
                <table class="table ">
                    <thead class="thead-light">
                        <tr class="">
                            <th scope="col">#</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Doctor Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Message</th>
                            <th scope="col">Status</th>
                            <th scope="col">Approve</th>
                            <th scope="col">Cancel</th>





                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $no = '1';
                        @endphp
                        @foreach ($data as $data)
                            <tr class="text-white">
                                <th scope="row">{{ $no }}</th>
                                <td>{{ $data->name }}</td>
                                <td>{{ $data->email }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->doctor }}</td>
                                <td>{{ $data->date }}</td>

                                <td>{{ $data->message }}</td>
                                <td>{{ $data->status }}</td>
                                <td><a href="{{ url('approved', $data->id) }}" class="btn btn-success">Approve</a></td>
                                <td><a href="{{ url('cancel', $data->id) }}" class="btn btn-danger">Cancel</a></td>

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
