@extends('pipe::app')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">NEW PROJECT</h1>
    </div>
    @include('pipe::projects.form', [
        'project' => new \Fikrimi\Pipe\Models\Project()
    ])
    <form action="{{ route('pipe::projects.store') }}" method="post" id="form-project">
        @csrf
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
