@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Students
                    <a href="{{ route('students.create') }}" class="btn btn-primary float-right">Create new student</a>
                </div>

                <div class="card-body">
                    <table class="table" id="alltbl">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Course</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $i )
                        <tr>
                            <th>{{ $i->student_number }}</th>
                            <td>{{ $i->first_name }}</td>
                            <td>{{ $i->last_name }}</td>
                            <td>{{ $i->course->name }}</td>
                            <td>
                                <a href="{{ route('students.edit', $i) }}" class="btn btn-success btn-sm">Edit</a>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
@endsection
