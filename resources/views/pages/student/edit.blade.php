@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit student</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('students.update', $student) }}">
                    @csrf
                    @METHOD("PUT")
                    <div class="mb-3">
                        <label class="form-label">Student number</label>
                        <input type="text" class="form-control" name="student_number" value='{{ $student->student_number }}'>
                        @error('student_number')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">First name</label>
                        <input type="text" class="form-control" name="first_name" value='{{ $student->first_name }}'>
                        @error('first_name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Last name</label>
                        <input type="text" class="form-control" name="last_name" value='{{ $student->last_name }}'>
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
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                    data-target="#delete-modal" data-backdrop="static" data-keyboard="false">Delete</button> 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="delete-modal">
    <div class="modal-dialog modal-sm mt-0 mb-0 modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Are you sure?</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="card-body">
                    <form action="{{ route('students.destroy', $student) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <h6>Summary:</h6>
                    <ul class="text-muted">
                        <li>{{$student->student_number}}</li>
                    </ul>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-danger btn-sm">Yes, I'm sure</button>
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">No, take me
                        back</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
