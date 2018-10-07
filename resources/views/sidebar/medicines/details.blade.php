@extends('layouts.app')
@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">List of all contraindications about <strong>{{$medicine->name}}</strong></div>
                <div class="panel-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label for="contraindication" class="col-md-4 control-label">Contraindication</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">List of all types about <strong>{{$medicine->name}}</strong></div>
                <div class="panel-body">
                    <div class="form-horizontal">
                        <div class="form-group">
                            <label for="contraindication" class="col-md-4 control-label">Contraindication</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
