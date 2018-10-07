@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Edit contraindications about <strong>{{$medicine->name}}</strong></div>
                <div class="panel-body">
                    <div class="form-horizontal">


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

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">Edit contraindications about <strong>{{$medicine->name}}</strong></div>
                <div class="panel-body">
                    <div class="form-horizontal">


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

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
