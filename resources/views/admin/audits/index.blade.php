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
                <h6 class="mb-4">O`zgarishlar</h6>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Admin nomi</th>
                                <th scope="col">Xolati</th>
                                <th scope="col">Vaqt</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($audits as $item)
                            <tr>
                                <th scope="row">{{ ++$loop->index }}</th>
                                <td>{{ $item->user_name }}</td>
                                <td>
                                    @if($item -> status == 1)
                                        <font style="color: green;">O`qildi</font>
                                    @else
                                        <font style="color: red;">O`qilmagan</font> 
                                    @endif
                                </td>
                                <td>{{ $item->date }}</td>
                                <td>
                                    <form method="POST" action="{{ route('admin.audits.destroy', $item->id) }}">
                                        @csrf
                                        @method('DELETE')

                                        <a class="btn btn-primary" href="{{ route('admin.audits.show', $item->id) }}"><ion-icon name="eye-outline"></ion-icon></a>


                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Rostdan o`chirishni hohlaysizmi ?')"><ion-icon name="trash-outline"></ion-icon></button>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $audits->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection