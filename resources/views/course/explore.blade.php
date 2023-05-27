@extends('layouts.app')

@section('content')

    <h2>Discover new course</h2>

    @foreach($courses as $course)
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$course->name}}</h5>
          <p class="card-text">{{$course->description}}</p>
        <form action="{{route('course.enroll')}}" method="post">
            @csrf
            <button type="submit">
                Enroll
            </button>
            <input type="hidden" name="course_id" value="{{$course->id}}">
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
        </form>
        </a>
        </div>
      </div>
    @endforeach

@endsection