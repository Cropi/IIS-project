@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add new treatment</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('treatments.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('diagnosis') ? ' has-error' : '' }}">
                            <label for="diagnosis" class="col-md-4 control-label">Diagnosis *</label>

                            <div class="col-md-6">
                                <input id="diagnosis" type="text" class="form-control" name="diagnosis" value="{{ old('diagnosis') }}">
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
                                <input id="startDate" type="text" class="form-control" name="startDate" placeholder="2018-10-20 09:30:00" value="{{ old('startDate') }}">

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
                                <input id="state" type="text"  class="form-control" name="state" value="inProcess" readonly>
                            </div>
                        </div>


                        <div class="form-group {{$errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Price *</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}">
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
                                <input id="created" type="text" class="form-control" name="created" value="{{Auth::user()->name}}" disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="forAnimal" class="col-md-4 control-label">Animal *</label>

                            <div class="col-md-6">
                                <select id="forAnimal" class="selectpicker form-control" name="forAnimal">
                                    @foreach($animals as $animal)
                                        <option value="{{$animal->id}}">{{$animal->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
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
