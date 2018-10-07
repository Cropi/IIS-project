@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit informations about <strong>{{$medicine->name}}</strong>?</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('update-medicine', $medicine->id) }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $medicine->name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Type</label>

                            <div class="col-md-6">
                                <input id="type" type="text" class="form-control" name="type" value="{{ $medicine->type }}" required autofocus>

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                                <a role="button" class="btn btn-outline-primary" href="{{route('medicines')}}">
                                   <strong>&laquo; Go back</strong>
                                </a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit contraindications about <strong>{{$medicine->name}}</strong></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('add-contraindication-medicine', $medicine->id) }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nameContraindications" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <select id="nameContraindications" class="selectpicker form-control" name="nameContraindications">
                                    <option value="veterinarian">Veterinarian(admin)</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('contraindication') ? ' has-error' : '' }}">
                            <label for="contraindication" class="col-md-4 control-label">Contraindication</label>

                            <div class="col-md-6">
                                <input id="contraindication" type="text" class="form-control" name="name" value="" required autofocus>

                                @if ($errors->has('contraindication'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contraindication') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                                <a role="button" class="btn btn-outline-primary" href="{{route('medicines')}}">
                                   <strong>&laquo; Go back</strong>
                                </a>
                                <button type="button" class="btn btn-danger">Delete</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modify the type of animals for which can be applied to</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('add-types-medicine', $medicine->id) }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="nameType" class="col-md-4 control-label">Name</label>
                            <div class="col-md-6">
                                <select id="nameType" class="selectpicker form-control" name="nameType">
                                    <option value="veterinarian">Veterinarian(admin)</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="typeType" class="col-md-4 control-label">Type</label>

                            <div class="col-md-6">
                                <input id="typeType" type="text" class="form-control" name="typeType" value="" required autofocus>

                                @if ($errors->has('typeType'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('typeType') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                                <a role="button" class="btn btn-outline-primary" href="{{route('medicines')}}">
                                   <strong>&laquo; Go back</strong>
                                </a>
                                <button type="button" class="btn btn-danger">
                                    Delete
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
