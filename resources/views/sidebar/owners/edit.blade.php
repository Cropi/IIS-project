@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit informations about <strong>{{$owner->name}} {{$owner->surname}}</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('update-owner', $owner->id) }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('personalID') ? ' has-error' : '' }}">
                            <label for="personalID" class="col-md-4 control-label" >Personal ID</label>

                            <div class="col-md-6">
                                <input id="personalID" type="text" class="form-control" name="personalID" value="{{$owner->personalID}}">
                                @if ($errors->has('personalID'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('personalID') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $owner->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('surname') ? ' has-error' : '' }}">
                            <label for="surname" class="col-md-4 control-label">Surname</label>

                            <div class="col-md-6">
                                <input id="surname" type="text" class="form-control" name="surname" value="{{ $owner->surname }}" required autofocus>

                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('adress') ? ' has-error' : '' }}">
                            <label for="adress" class="col-md-4 control-label">Adress</label>

                            <div class="col-md-6">
                                <input id="adress" type="text" class="form-control" name="adress" value="{{ $owner->adress }}">
                                @if ($errors->has('adress'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('adress') }}</strong>
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
