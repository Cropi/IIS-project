@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Remove medicine from database?</div>
                    <div class="panel-body">
                        <form class="form-horizontal"  method="POST" action="{{ route('medicines.destroy', $medicine->id) }}">
                            {{method_field('DELETE')}}
                            {{ csrf_field() }}

                            <h4>Do your really want to REMOVE <strong>{{$medicine->name}}</strong>?</h4>


                            <a role="button" class="btn btn-outline-primary" href="{{route('medicines')}}">
                               <strong>&laquo; Go back</strong>
                            </a>


                            <button type="submit" class="btn btn-primary a-btn-slide-text">
                               <span class="glyphicon glyphicon-remove" ></span>
                                <span><strong>Delete</strong></span>
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
