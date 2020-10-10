@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Users LOGs</div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">User</th>
                                <th scope="col">Method</th>
                                <th scope="col">Url</th>
                                <th scope="col">Referer</th>
                                <th scope="col">Languages</th>
                                <th scope="col">Useragent</th>
                                {{-- <th scope="col">Headers</th> --}}
                                <th scope="col">Device</th>
                                <th scope="col">IP</th>
                                <th scope="col">Browser</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($logs as $log)
                                    <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$log->user->name}}</td>
                                    <td>{{$log->method}}</td>
                                    <td>{{$log->url}}</td>
                                    <td>{{$log->referer}}</td>
                                    <td>{{$log->languages}}</td>
                                    <td>{{$log->useragent}}</td>
                                    {{-- <td>{{$log->headers}}</td> --}}
                                    <td>{{$log->device}}</td>
                                    <td>{{$log->ip}}</td>
                                    <td>{{$log->browser}}</td>
                                    <td>{{$log->created_at}}</td>
                                    <td>{{$log->updated_at}}</td>
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