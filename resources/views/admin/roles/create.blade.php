@extends('admin.layouts.main')
@section('content')
<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="m-n2">
        <a href="{{ route('admin.roles.index') }}"><button type="button" class="btn btn-primary m-2"><ion-icon style="font-size: 20px; margin-bottom: 0;" name="arrow-back-outline"></ion-icon>Orqaga</button></a>
    </div>
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6 form-control">
            <div class="bg-light rounded h-100 p-4 form-control">
                <h6 class="mb-4">Role qo'shish</h6>
                <form method="POST" action="{{ route('admin.roles.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Role name</label>
                        <input type="text" name="role_name" class="form-control" aria-describedby="emailHelp">
                    </div>
                        <button type="submit" class="btn btn-primary">Qo'shish</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->

@endsection