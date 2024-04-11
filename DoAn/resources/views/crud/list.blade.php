@extends('dashboard')

@section('content')
    <main class="user-management">
        <div class="container">
            <h1>Quản lý người dùng</h1>
            <div class="table-container">
                <table class="user-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                          
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->password }}</td>
                                <td>
                                <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                                <a href="{{ route('user.postUpdateUser', ['id' => $user->id]) }}">Chỉnh sữa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
