@extends('admin.layouts.main')
@section('content')
<!-- Form Start -->
<div class="container-fluid pt-4 px-4">
    <div class="m-n2">
        <a href="{{ route('admin.posts.index') }}"><button type="button" class="btn btn-primary m-2"><ion-icon style="font-size: 20px; margin-bottom: 0;" name="arrow-back-outline"></ion-icon>Orqaga</button></a>
    </div>
    <div class="row g-4">
        <div class="col-sm-12 col-xl-6 form-control">
            <div class="bg-light rounded h-100 p-4 form-control">
                <h6 class="mb-4">Post qo'shish</h6>
                <form method="POST" action="{{ route('admin.posts.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Title uz</label>
                        <input type="text" name="title_uz" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Title ru</label>
                        <input type="text" name="title_ru" class="form-control" aria-describedby="emailHelp">
                    </div>

                    <div class="container-fluid pt-4 px-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-xl-6">
                                <div class="bg-light rounded h-100 p-4">
                                    <h6 class="mb-4">Rasm qo`shish</h6>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Kerakli rasmni tanlang</label>
                                        <input class="form-control" name="img" type="file" id="formFile">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Body uz</label>
                        <textarea class="ckeditor form-control" name="body_uz" value="{{ old('body_uz') }}"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Body ru</label>
                        <textarea class="ckeditor form-control" name="body_ru" value="{{ old('body_ru') }}"></textarea>
                    </div>

                    <strong>Category:</strong>
                    <select class="select form-control" name="category_id" id="">
                        @foreach($categories as $item)
                        <option value="{{ $item->id }}">{{ $item->c_name_uz }}</option>
                        @endforeach
                    </select> <br>
                    <br>
                    <strong>Tegs:</strong>
                    <select class="select form-control" id="example-multiple-selected" name="teg_id[]" multiple>
                        @foreach($tegs as $item)
                            <option value="{{ $item->id }}">{{ $item->teg_uz }}</option>
                        @endforeach
                    </select>

                    <button type="submit" class="btn btn-primary mt-4">Qo'shish</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>

@endsection