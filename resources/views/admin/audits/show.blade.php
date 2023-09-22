@extends('admin.layouts.main')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="m-n2">
        <a href="{{ route('admin.audits.index') }}"><button type="button" class="btn btn-primary m-2"><ion-icon style="font-size: 20px; margin-bottom: 0;" name="arrow-back-outline"></ion-icon>Orqaga</button></a>
    </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Audit tekshiruv</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th scope="row">Admin nomi</th>
                                        <td>{{ $audit->user_name }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">IP</th>
                                        <td>{{ $audit->IP }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Qurilma</th>
                                        <td>{{ $audit->device }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Hodisa</th>
                                        <td>{{ $audit->event }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Ma`lumot</th>
                                        <td>{{ $audit->data }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Date</th>
                                        <td>{{ $audit->date }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection