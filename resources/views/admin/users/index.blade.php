@extends('admin.layouts.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    @if($message = Session::get('succes'))
    <div class="alert alert-primary" role="alert">
        {{ $message }}
    </div>
    @endif
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Roles</h6>
                <div class="d-flex justify-content-end m-3">
                    <a href="{{ route('admin.users.create') }}"><button type="button" class="btn btn-primary m-2"><ion-icon style="font-size: 20px;" 2 name="create-outline"></ion-icon>Yaratish</button></a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $item)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->role->role_name ?? 'Bog`lanmagan' }}</td>
                                <td>
                                    <form method="POST" action="{{ route('admin.users.destroy', $item->id) }}">
                                        @csrf
                                        @method('DELETE')

                                        <a class="btn btn-primary" href="{{ route('admin.users.edit', $item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Rostdan o`chirishni hohlaysizmi ?')"><ion-icon name="trash-outline"></ion-icon></button>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection