@extends('admin.layouts.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Postlar</h6>
                <div class="d-flex justify-content-end m-3">
                    <a href="{{ route('admin.posts.create') }}"><button type="button" class="btn btn-primary m-2"><ion-icon style="font-size: 20px;" 2 name="create-outline"></ion-icon>Yaratish</button></a>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Title uz</th>
                                <th scope="col">Title ru</th>
                                <th scope="col">Image</th>
                                <th scope="col">Views</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $item)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{ $item->title_uz }}</td>
                                <td>{{ $item->title_ru }}</td>
                                <td><img src="/files/{{$item->img}}" width="60px"></td>
                                <td>{{ $item->views }}</td>
                                <td>
                                    <form method="POST" action="{{ route('admin.posts.destroy', $item->id) }}">
                                        @csrf
                                        @method('DELETE')

                                        <a class="btn btn-primary" href="{{ route('admin.posts.show', $item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>
                                        <a class="btn btn-primary" href="{{ route('admin.posts.edit', $item->id) }}"><ion-icon name="create-outline"></ion-icon></a>

                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Rostdan o`chirishni hohlaysizmi ?')"><ion-icon name="trash-outline"></ion-icon></button>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection