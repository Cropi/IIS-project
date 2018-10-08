@extends('layouts.app')

@section('content')

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
                                <input id="pet" type="text" class="form-control" name="pet" value="{{$data['treatment']->animal->name}}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="owner" class="col-md-4 control-label">Owner name</label>

                            <div class="col-md-6">
                                <input id="owner" type="text" class="form-control" name="owner" value="{{$data['treatment']->animal->owner->name}} {{$data['treatment']->animal->owner->surname}}" disabled>
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
