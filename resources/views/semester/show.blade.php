@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h2>Semester Details</h2>
    <p><strong>Semester Number : </strong> {{ $SemesterMaster->semester_number }}</p>
    <p><strong>Status:</strong> {{ $SemesterMaster->status ? 'Active' : 'Inactive' }}</p>
    <p><strong>Created On:</strong> {{ $SemesterMaster->created_on }}</p>
    <p><strong>Created By:</strong> {{ $SemesterMaster->created_by }}</p>
    <a href="{{ route('semester.edit', $SemesterMaster->id) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('semester.destroy', $SemesterMaster->id) }}" method="POST" style="display: inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
    </form>
    <a href="{{ route('semester.index' )}}" class="btn btn-secondary">Back to Semesters</a>
</div>
@endsection
