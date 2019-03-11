@extends('layouts.app')

@section('description')
    <div class="push-50-t push-15 clearfix">
        <h1 class="h2 push-5-t animated zoomIn">{{ $student->name }}</h1>
    </div>
@endsection

@section('content')
                   <table class="table table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>Naam</th>
                          <th>Student ID</th>
                          @foreach($student->grades as $grade)
                          <th>{{$grade->test_name}}</th>
                          @endforeach
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>{{$student->name}}</td>
                          <td>{{$student->id}}</td>
                          @foreach($lastGrades as $lastGrade)
                          <td>{{$lastGrade}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    
        <!-- END People -->

@endsection
