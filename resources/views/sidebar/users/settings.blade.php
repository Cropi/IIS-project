@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update my informations</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('update-settings') }}">
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
                                <select id="role" class="selectpicker form-control" name="role" @if ($user->role == 'nurse') disabled @endif>
                                    <option value="veterinarian">Veterinarian(admin)</option>
                                        @if ($user->role == 'veterinarian')
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

                        <div class="form-group{{ $errors->has('adress') ? ' has-error' : '' }}">
                            <label for="adress" class="col-md-4 control-label">Adress</label>

                            <div class="col-md-6">
                                <input id="adress" type="text" class="form-control" name="adress" value="{{ $user->adress }}">

                                @if ($errors->has('adress'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('bankAccountNumber') ? ' has-error' : '' }}">
                            <label for="bankAccountNumber" class="col-md-4 control-label">Bank account number</label>

                            <div class="col-md-6">
                                <input id="bankAccountNumber" type="text" class="form-control" name="bankAccountNumber" value="{{ $user->bankAccountNumber }}">

                            @if ($errors->has('bankAccountNumber'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('bankAccountNumber') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('wage') ? ' has-error' : '' }}">
                            <label for="wage" class="col-md-4 control-label">Wage</label>

                            <div class="col-md-6">
                                <input id="wage" type="text" class="form-control" name="wage" value="{{ $user->wage }}" @if ($user->role == 'nurse') readonly @endif>

                            @if ($errors->has('wage'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('wage') }}</strong>
                                </span>
                            @endif
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
