@extends('admin.layouts.main')
@section('content')
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Postlar</h6>
                            <div class="d-flex justify-content-end m-3">
                                <a href="{{ route('admin.posts.index') }}"><button type="button" class="btn btn-primary m-2">Orqaga</button></a>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <td>ID</td>       
                                        <td>{{ $post->id }}</td>       
                                    </tr>

                                    <tr>
                                        <td>Title uz</td>       
                                        <td>{{ $post->title_uz }}</td>       
                                    </tr>

                                    <tr>
                                        <td>Title ru</td>       
                                        <td>{{ $post->title_ru }}</td>       
                                    </tr>

                                    <tr>
                                        <td>Image</td>       
                                        <td><img src="/files/{{ $post->img }}" width="90px"></td>       
                                    </tr>

                                    <tr>
                                        <td>Body uz</td>       
                                        <td>{{ $post->body_uz }}</td>       
                                    </tr>

                                    <tr>
                                        <td>Body ru</td>       
                                        <td>{{ $post->body_ru }}</td>       
                                    </tr>

                                    <tr>
                                        <td>Category :</td>
                                        <td>{{ $post->c_name_uz }}</td>       
                                    </tr>

                                    <tr>
                                        <td>Tegs :</td>
                                        <td>
                                            @foreach($post->tegs as $item)
                                                #{{ $item->teg_uz }} <br>
                                            @endforeach
                                        </td>       
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection