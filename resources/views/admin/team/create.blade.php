@extends('layouts.app')

@section('content')
    <div class="container page-content">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <div class="container-fluid">
                    <div class="row page-title-row">
                        <div class="col-md-12">
                            <h3> {{ trans('team.team') }} <small>&raquo; {{ trans('team.create') }}</small></h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"> {{ trans('team.create_new') }} </h3>
                            </div>
                            <div class="panel-body">


                                {!! Form::open(['method' => 'POST', 'route' => 'admin.teams.store', 'class' => 'form-horizontal', 'files'=> true]) !!}
                                <div class="form-group, col-md-11">
                                    {!! Form::label('name', trans('team.name'), ['class' => 'control-label']) !!}
                                    {!! Form::text('name', null, ['class' => 'form-control', 'autofocus']) !!}
                                </div>

                                <div class="form-group, col-md-11">
                                    {!! Form::label('logo', trans('team.logo'), [ 'class' => 'control-label'  ]) !!}
                                    {!! Form::file('logo', ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group, col-md-11">
                                    {!! Form::label('description', trans('team.desciption'), ['class' => 'control-label']) !!}
                                    {!! Form::textarea('description', null, ['class' => 'form-control', 'autofocus', 'rows' => '3']) !!}
                                </div>

                                <div class="form-group, col-md-11">
                                    {!! Form::label('country_id', trans('team.country'), ['class' => 'control-label']) !!}
                                    {!! Form::select('country_id', $country, null, ['class' => 'form-control', 'autofocus']) !!}
                                </div>

                                <div class="form-group, col-md-10">
                                    {!! Form::button('<i class="fa fa-plus-circle"></i>&nbsp;' . trans('team.add'), ['type' => 'submit', 'class' => 'btn btn-primary btn-md']) !!}
                                </div>
                                {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@stop