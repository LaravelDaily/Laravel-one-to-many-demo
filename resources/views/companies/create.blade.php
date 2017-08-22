@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Add New Company</div>

                    <div class="panel-body">
                        <form class="form-horizontal" method="POST" action="{{ route('companies.store') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <hr />

                            <b>Employee 1</b>

                            <div class="form-group{{ $errors->has('employee1_name') ? ' has-error' : '' }}">
                                <label for="employee1_name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="employee1_name" type="text" class="form-control" name="employee1_name" value="{{ old('employee1_name') }}" required>

                                    @if ($errors->has('employee1_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('employee1_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('employee1_email') ? ' has-error' : '' }}">
                                <label for="employee1_email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="employee1_email" type="email" class="form-control" name="employee1_email" value="{{ old('employee1_email') }}" required>

                                    @if ($errors->has('employee1_email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('employee1_email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <hr />

                            <b>Employee 2</b>

                            <div class="form-group{{ $errors->has('employee2_name') ? ' has-error' : '' }}">
                                <label for="employee2_name" class="col-md-4 control-label">Name</label>

                                <div class="col-md-6">
                                    <input id="employee2_name" type="text" class="form-control" name="employee2_name" value="{{ old('employee2_name') }}">

                                    @if ($errors->has('employee2_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('employee2_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('employee2_email') ? ' has-error' : '' }}">
                                <label for="employee2_email" class="col-md-4 control-label">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="employee2_email" type="email" class="form-control" name="employee2_email" value="{{ old('employee2_email') }}">

                                    @if ($errors->has('employee2_email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('employee2_email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save Company
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
