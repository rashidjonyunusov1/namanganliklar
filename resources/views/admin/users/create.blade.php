@extends('admin.layouts.main')
@section('content')
<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="m-n2">
        <a href="{{ route('admin.tegs.index') }}"><button type="button" class="btn btn-primary m-2"><ion-icon style="font-size: 20px; margin-bottom: 0;" name="arrow-back-outline"></ion-icon>Orqaga</button></a>
    </div>
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6 form-control">
            <div class="bg-light rounded h-100 p-4 form-control">
                <h6 class="mb-4">Admin qo`shish</h6>
                <form method="POST" action="{{ route('admin.users.store') }}">
                    @csrf
                    <strong>Role:</strong>
                    <select class="select form-control" name="role_id" >
                        @foreach($roles as $item)
                        <option value="{{ $item->id }}">{{ $item->role_name }}</option>
                        @endforeach
                    </select> <br>
                    <br>

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control" aria-describedby="emailHelp">
                    </div>
                        <button type="submit" class="btn btn-primary">Qo'shish</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->

@endsection