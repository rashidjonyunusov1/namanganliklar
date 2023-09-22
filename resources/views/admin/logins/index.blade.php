@extends('admin.layouts.main')
@section('content')
<div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">Loginlar va Logoutlar</h6>
                             <div class="table-responsive">
                                <table class="table">
                                    @foreach($logins as $item)
                                        <tr>
                                            <th scope="row">Name</th>
                                            <td>{{ $item->user_name }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Login Date</th>
                                            <td>{{ $item->login_date }}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Logout Date</th>
                                            <td>{{ $item->logout_date }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                                {{ $logins->links() }}
                            </div>
                        </div>
                    </div>
                </div>
</div>
@endsection