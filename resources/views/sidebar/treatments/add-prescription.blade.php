@extends('layouts.app')

@section('content')

@if ($data['error'] == 'error')
<div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span class="pficon pficon-close"></span>
    </button>
    <span class="pficon pficon-error-circle-o"></span>
    <strong>Hey there is a problem!</strong> The selected medicine does not support the animals type!
</div>
@endif

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add new medicine to the requested treatment with ID <strong>({{$data['treatment']->id}})</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('store-prescription-medicine', $data['treatment']->id)}}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="pet" class="col-md-4 control-label">Pet name</label>

                            <div class="col-md-6">
                                <input id="pet" type="text" class="form-control" name="pet" value="{{ $data['treatment']->animal->name }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="owner" class="col-md-4 control-label">Owner name</label>

                            <div class="col-md-6">
                                <input id="owner" type="text" class="form-control" name="owner" value="{{ $data['treatment']->animal->owner->name.' '.$data['treatment']->animal->owner->surname}}" disabled>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="forMedicine" class="col-md-4 control-label">Medicine</label>

                            <div class="col-md-6">
                                <select id="forMedicine" class="selectpicker form-control" name="forMedicine">
                                    @foreach($data['medicines'] as $medicine)
                                    <option value="{{$medicine->id}}" >{{$medicine->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('disease') ? ' has-error' : '' }}">
                            <label for="disease" class="col-md-4 control-label">Disease</label>

                            <div class="col-md-6">
                                <input id="disease" type="text" class="form-control" name="disease" value="{{old('disease')}}" required>

                                @if ($errors->has('disease'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('disease') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('amount1') ? ' has-error' : '' }}">
                            <label for="amount1" class="col-md-4 control-label">How many?</label>

                            <div class="col-md-4">
                                <input id="amount1" type="text" class="form-control" name="amount1" value="{{old('amount1')}}" required>

                                @if ($errors->has('amount1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount1') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="amount2" class="col-md-1 control-label">/</label>
                            <div class="col-md-2">
                                <select id="amount2" class="selectpicker form-control" name="amount2">
                                    <option value="hour"> Hour(s)</option>
                                    <option value="day"> Days(s) </option>
                                    <option value="week"> Week(s) </option>
                                    <option value="month"> Month(s) </option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group {{$errors->has('timeToConsume1') ? ' has-error' : '' }}">
                            <label for="timeToConsume1" class="col-md-4 control-label">For how long?</label>
                            <div class="col-md-4">
                                <input id="timeToConsume1" type="text" class="form-control" name="timeToConsume1" value="{{old('timeToConsume1')}}" required>

                                @if ($errors->has('timeToConsume1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('timeToConsume1') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="timeToConsume2" class="col-md-1 control-label">/</label>
                            <div class="col-md-2">
                                <select id="timeToConsume2" class="selectpicker form-control" name="timeToConsume2">
                                    <option value="day"> Days(s) </option>
                                    <option value="week"> Week(s) </option>
                                    <option value="month"> Month(s) </option>
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
