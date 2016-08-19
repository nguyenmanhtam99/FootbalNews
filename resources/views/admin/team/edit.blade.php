@extends('layouts.app')

@section('content')
    <div class="container page-content">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <div class="container-fluid">
                    <div class="row page-title-row">
                        <div class="col-md-12">
                            <h3> {{ trans('team.team') }} <small>&raquo; {{ trans('team.edit') }}</small></h3>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"> {{ trans('team.edit') }} </h3>
                            </div>
                            <div class="panel-body">

                                {!! Form::model($team, ['method' => 'PUT', 'route' => ['admin.teams.update', $team->id], 'class' => 'form-horizontal', 'files'=> true]) !!}
                                <div class="form-group, col-md-11">
                                    {!! Form::label('name', trans('team.name'), ['class' => 'control-label']) !!}
                                    {!! Form::text('name', $team->name, ['class' => 'form-control', 'autofocus']) !!}
                                </div>

                                <div class="form-group, col-md-11">
                                    {!! Form::label('logo', trans('team.logo'), [ 'class' => 'control-label'  ]) !!}
                                    {!! Form::file('logo', ['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group, col-md-11">
                                    {!! Form::label('description', trans('team.desciption'), ['class' => 'control-label']) !!}
                                    {!! Form::textarea('description', $team->description, ['class' => 'form-control', 'autofocus', 'rows' => '3']) !!}
                                </div>

                                <div class="form-group, col-md-11">
                                    {!! Form::label('country_id', trans('team.country'), ['class' => 'control-label']) !!}
                                    {!! Form::select('country_id', $country, $team->country_id, ['class' => 'form-control', 'autofocus']) !!}
                                </div>

                                <div class="form-group, col-md-11">
                                    {!! Form::button('<i class="fa fa-plus-circle"></i>&nbsp;' . trans('team.edit'), ['type' => 'submit', 'class' => 'btn btn-primary btn-md']) !!}
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