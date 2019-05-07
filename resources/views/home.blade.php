@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ url('Empform') }}">Add Employee</a>
                </div>
            </div>
        </div>
    </div>
    <div class = 'empdata'>
    <table border = "2">
<tr>
<td>Name</td>
<td>Email</td>
<td>Department</td>
<td>Designation</td>
<td>Address</td>
<td>Country</td>
</tr>
@foreach ($Empdata as $user)
<tr>
<td>{{ $user['name'] }}</td>
<td>{{ $user['email'] }}</td>
<td>{{ $user['department']}}</td>
<td>{{ $user['designation'] }}</td>
<td>{{ $user['address'] }}</td>
<td>{{ $user['address1'] }}</td>
<td>{{ $user['country'] }}</td>
<td><a href = "">Edit</a></td>
</tr>
@endforeach
</table>
</div>
</body>
</html>
@endsection
