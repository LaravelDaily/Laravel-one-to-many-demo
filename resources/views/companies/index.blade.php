@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Companies list</div>

                    <div class="panel-body">
                        <table class="table">
                            <tr>
                                <th rowspan="2">Company</th>
                                <th colspan="2">Employees</th>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                            @foreach ($companies as $company)
                                @foreach ($company->employees as $employee)
                                    <tr>
                                        <td>
                                        @if ($loop->iteration == 1)
                                            <b>{{ $company->name }}: {{ $company->employees->count() }} employee(s)</b>
                                        @endif
                                        </td>
                                        <td>{{ $employee->name }}</td>
                                        <td>{{ $employee->email }}</td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
