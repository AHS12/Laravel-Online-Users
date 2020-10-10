@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Online Users</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">IP</th>
                                <th scope="col">Browser</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    {{-- @dd($user->isOnline()) --}}
                                    <td>{{$user->visit()->ip}}</td>
                                    <td>{{$user->visit()->browser}}</td>
                                    </tr>
                                @endforeach
                              
                             
                            </tbody>
                          </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection