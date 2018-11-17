@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit informations about <strong>{{ $data['animal']->name}}</strong>?</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('update-animal', $data['animal']->id) }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $data['animal']->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="owner" class="col-md-4 control-label">Owner</label>
                            <div class="col-md-6">
                                <!-- <input id="role" type="email" class="form-control" name="role" value="{{ old('role') }}" required> -->
                                <select id="owner" class="selectpicker form-control" name="owner">
                                    @foreach($data['owners'] as $owner)
                                        <option value="{{$owner->id}}"
                                            @if ($owner->name == $data['animal']->owner->name)
                                                selected="selected"
                                            @endif
                                            >{{$owner->name}} {{$owner->surname}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="type" class="col-md-4 control-label">Type</label>
                            <div class="col-md-6">
                                <select id="type" class="selectpicker form-control" name="type">
                                    <option value="Camel">Camel</option>
                                    <option value="Cat">Cat</option>
                                    <option value="Chichken">Chichken</option>
                                    <option value="Donkey">Donkey</option>
                                    <option value="Dog">Dog</option>
                                    <option value="Horse">Horse</option>
                                    <option value="Perrot">Perrot</option>
                                    <option value="Pig">Pig</option>
                                    <option value="Raccoon">Racoon</option>
                                    <option value="Rabbit">Rabbit</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">
                            <label for="birthday" class="col-md-4 control-label">Birthday</label>

                            <div class="col-md-6">
                                <input id="birthday" type="text" class="form-control" name="birthday" value="{{$data['animal']->birthday }}"placeholder="2009-04-29 07:30:00" autofocus>

                                @if ($errors->has('birthday'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('birthday') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="lastVisit" class="col-md-4 control-label">Last Visit</label>

                            <div class="col-md-6">
                                <input id="lastVisit" type="text" class="form-control" name="lastVisit" value="{{ $data['animal']->lastVisit }}" placeholder="2018-07-29 07:00:00">
                                @if ($errors->has('lastVisit'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastVisit') }}</strong>
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
