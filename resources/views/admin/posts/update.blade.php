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
                <h6 class="mb-4">Post yangilash</h6>
                <form method="POST" action="{{ route('admin.posts.update', $post->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label">Title uz</label>
                        <input type="text" name="title_uz" value="{{ $post->title_uz }}" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Title ru</label>
                        <input type="text" name="title_ru" value="{{ $post->title_ru }}" class="form-control" aria-describedby="emailHelp">
                    </div>

                    <div class="container-fluid pt-4 px-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-xl-6">
                                <div class="bg-light rounded h-100 p-4">
                                    <h6 class="mb-4">Rasm qo`shish</h6>
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Kerakli rasmni tanlang</label>
                                        <input class="form-control" name="img" value="{{ $post->img }}" type="file" id="formFile">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Body uz</label>
                        <input type="text" name="body_uz" value="{{ $post->body_uz }}" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Body ru</label>
                        <input type="text" name="body_ru" value="{{ $post->body_ru }}" class="form-control" aria-describedby="emailHelp">
                    </div>

                    <strong>Category:</strong>
                    <select name="category_id" id="" class="select form-control">
                        @foreach($categories as $item)
                            <option @if($item->id == $post->category_id) selected @endif value="{{ $item->id }}">{{ $item->c_name_uz }}</option>
                        @endforeach
                    </select> <br>

                    <strong>Teg:</strong>
                    <select name="teg_id" id="example-multiple-selected" class="select form-control" multiple>
                        @foreach($tegs as $item)
                            <option 
                            @foreach($post->tegs as $postTeg)
                                @if($postTeg->id == $item->id) selected @endif
                            @endforeach
                            value="{{ $item->id }}">{{ $item->teg_uz }}</option>
                        @endforeach
                    </select> <br>

                    <button type="submit" class="btn btn-primary mt-4">Qo'shish</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Form End -->

@endsection