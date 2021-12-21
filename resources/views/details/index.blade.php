@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column align-items-end mt-4">
        <a href="{{ url('/home') }}" class="btn btn-outline-primary">Home</a>

        <table class="table table-striped mt-4">
            <tbody>
            <tr>
                <th scope="row">ID</th>
                <td>{{ $user['id'] }}</td>
            </tr>
            <tr>
                <th scope="row">Имя пользователя</th>
                <td>{{ $user['name'] }}</td>
            </tr>
            <tr>
                <th scope="row">Email</th>
                <td>{{ $user['email'] }}</td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
