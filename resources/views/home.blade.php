@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Welcome
                       @foreach($user as $users){{$users->name}}! @endforeach
                       <br>
                    You are logged in.                

            </div>
        </div>
    </div>
    <br>
    {{-- {{dd($movieDataAndYr)}} --}}
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Movies</div>
                <div class="card-body">
                    <div class="table-responsive">          
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Year</th>
                          <th>Yrs Since Release</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($movieDataAndYr as $key => $day)
                            <tr>
                                <td>
                                {{$day['title']}}
                                </td>
                                <td>
                                    released in 
                                    {{$day['releaseYr']}}
                                </td>
                                <td>
                                   ( {{$day['yrsSinceRelease']}} yrs ago. )
                                </td>
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
</div>
@endsection
