@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update informations</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('update-user', [ 'id' => $user->id ]) }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="role" class="col-md-4 control-label">Role</label>
                            <div class="col-md-6">
                                <!-- <input id="role" type="email" class="form-control" name="role" value="{{ old('role') }}" required> -->
                                <select id="role" class="selectpicker form-control" name="role" required>
                                    <option value="admin">Veterinarian(admin)</option>
                                        @if ($user->role == 'admin')
                                            selected="selected"
                                        @endif
                                    <option value="nurse"
                                        @if ($user->role == 'nurse')
                                            selected="selected"
                                        @endif
                                    >Nurse</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="adress" class="col-md-4 control-label">Adress</label>

                            <div class="col-md-6">
                                <input id="adress" type="text" class="form-control" name="adress" value="{{ $user->adress }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="bankAccountNumber" class="col-md-4 control-label">Bank account number</label>

                            <div class="col-md-6">
                                <input id="bankAccountNumber" type="text" class="form-control" name="bankAccountNumber" value="{{ $user->bankAccountNumber }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="wage" class="col-md-4 control-label">Wage</label>

                            <div class="col-md-6">
                                <input id="wage" type="text" class="form-control" name="wage" value="{{ $user->wage }}">
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
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
