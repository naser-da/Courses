@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    
                    {{ __('You are logged in!') }}
                </div>
            </div>
            
            @if(Auth::user()->role == 'admin')
            <form action="{{route('course.add')}}" method="post">
                @csrf
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
                    <input type="text" class="form-control" name="name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                <div class="input-group input-group-sm mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Description</span>
                    <input type="text" class="form-control" name="description" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                </div>
                
                <button type="submit" class="btn btn-primary">Add</button>
            </form>
            @endif

            @if(Auth::user()->role == 'student')

            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Professor</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($courses as $course)
                  <tr>
                    <th scope="row">{{$course->course_id}}</th>
                    {{-- <td>{{$course->name}}</td>
                    <td>{{$course->user_id}}</td> --}}
                    <td>
                        <form action="{{}}" method="post">
                            <button type="submit" class="btn btn-danger">
                                Drop
                            </button>
                        </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

            @endif

        </div>
    </div>
</div>
@endsection
