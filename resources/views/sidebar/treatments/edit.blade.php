@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit existing treatment</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('update-treatment', $data['treatment']->id) }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('diagnosis') ? ' has-error' : '' }}">
                            <label for="diagnosis" class="col-md-4 control-label">Diagnosis</label>

                            <div class="col-md-6">
                                <input id="diagnosis" type="text" class="form-control" name="diagnosis" value="{{ $data['treatment']->diagnosis }}">
                                @if ($errors->has('diagnosis'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('diagnosis') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('startDate') ? ' has-error' : '' }}">
                            <label for="startDate" class="col-md-4 control-label">Start date</label>

                            <div class="col-md-6">
                                <input id="startDate" type="text" class="form-control" name="startDate" value="{{ $data['treatment']->startDate }}" disabled>

                                @if ($errors->has('startDate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('startDate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="state" class="col-md-4 control-label">State</label>

                            <div class="col-md-6">
                                <select id="state" class="selectpicker form-control" name="state">
                                    <option value="inProcess"> In process</option>
                                    <option value="finished" {{ ($data['treatment']->state == 'finished' ? "selected": "") }}> Finished </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group {{$errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" value="{{$data['treatment']->price}}">
                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="created" class="col-md-4 control-label">Veterinarian</label>

                            <div class="col-md-6">
                                <input id="created" type="text" class="form-control" name="price" value="{{$data['treatment']->user->name}}" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="forAnimal" class="col-md-4 control-label">Animal</label>

                            <div class="col-md-6">
                                <select id="forAnimal" class="selectpicker form-control" name="forAnimal">
                                    @foreach($data['animals'] as $animal)
                                        <option value="{{$animal->id}}" {{ ($animal->id == $data['treatment']->animal->id ? "selected": "") }}>{{$animal->name}}</option>
                                    @endforeach
                                </select>
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
