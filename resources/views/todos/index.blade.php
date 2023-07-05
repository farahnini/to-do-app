@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('To-do Index') }}</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead class="bg-light">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Task</th>
                                <th scope="col">Start date</th>
                                <th scope="col">End date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($todos as $todo)
                            <tr>
                                <td>{{ $todo->id }}</td>
                                <td>{{ $todo->name }}</td>
                                <td>{{ $todo->start_date }}</td>
                                <td>{{ $todo->end_date }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
