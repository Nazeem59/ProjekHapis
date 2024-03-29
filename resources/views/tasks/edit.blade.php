<!-- resources/views/tasks/edit.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Task</h2>
        <form method="POST" action="{{ url('/tasks/' . $task->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $task->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
