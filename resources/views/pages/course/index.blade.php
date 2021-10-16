@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Courses
                    <a href="{{ route('courses.create') }}" class="btn btn-primary float-right">Create new course</a>
                </div>

                <div class="card-body">
                    <table class="table" id="alltbl">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Created at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $i )
                        <tr>
                            <th>{{ $i->id }}</th>
                            <td>{{ $i->name }}</td>
                            <td>{{ $i->created_at }}</td>
                            <td>
                                <a href="{{ route('courses.edit', $i) }}" class="btn btn-success btn-sm">Edit</a>
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
