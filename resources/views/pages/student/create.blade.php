@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create new course</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('students.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Student number</label>
                        <input type="text" class="form-control" name="student_number" value='{{ old("student_number") }}'>
                        @error('student_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">First name</label>
                        <input type="text" class="form-control" name="first_name" value='{{ old("first_name") }}'>
                        @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Last name</label>
                        <input type="text" class="form-control" name="last_name" value='{{ old("last_name") }}'>
                        @error('last_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Course</label>
                        <select class="form-control" name="course_id">
                            @foreach($courses as $i)
                                <option value='{{ $i->id}}' >{{  $i->name }}</option>
                            @endforeach
                        </select>
                        @error('course_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
