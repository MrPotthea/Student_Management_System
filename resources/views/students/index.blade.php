@extends('layouts.app')

@section('content')
<div class="table-responsive">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Manage <b>Students</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('students.create') }}" class="btn btn-success">
                        <i class="material-icons">&#xE147;</i> <span>Add New Student</span>
                    </a>
                </div>
            </div>
        </div>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Department</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $student)
                <tr>
                    <td>{{ $student->student_id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <span class="department-badge">{{ $student->department->name }}</span>
                    </td>
                    <td>{{ $student->phone }}</td>
                    <td class="action-buttons">
                        <a href="{{ route('students.edit', $student->id) }}" class="edit">
                            <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                        </a>
                        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete" style="border:none;background:none">
                                <i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="clearfix">
            <div class="hint-text">Showing <b>{{ $students->count() }}</b> out of <b>{{ $students->total() }}</b> entries</div>
            {{ $students->links() }}
        </div>
    </div>
</div>
@endsection