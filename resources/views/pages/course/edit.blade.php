@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit course</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('courses.update', $course) }}">
                    @csrf
                    @method("PUT")
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value='{{ $course->name }}'>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Update</button>
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
            <form action="{{ route('courses.destroy', $course) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    <h6>Summary:</h6>
                    <ul class="text-muted">
                        <li>{{$course->name}}</li>
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
