@extends('layouts.app')

@section('content')
    <div class="container page-content">
        <div class="row">

            <div class="col-md-10 col-md-offset-1">
                <section>
                    <div class="row page-title-row">
                        <div class="col-md-8">
                            <h3> {{ trans('team.team') }} <small>&raquo; {{ trans('team.list') }}</small></h3>
                            <p><a href="{{ route('admin.teams.create') }}"
                                  class="btn btn-primary" role="button"><i class="fa fa-plus-circle"></i></a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">

                                </div>
                                <div class="panel-body">

                                    <div class="dataTable_wrapper">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables">
                                            <thead>
                                            <tr>
                                                <th> {{ trans('team.team') }} </th>
                                                <th>{{ trans('team.country') }} </th>
                                                <th>{{ trans('team.continent') }} </th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($team as $t)

                                                <tr>
                                                    <td><a href="{{ route('admin.teams.show', $t->id) }}">{{ $t->name }} {!! Html::image($t->logo, null, ['class' => 'img-responsive img']) !!}</a></td>
                                                    <td>{{ $t->country->name }}</td>
                                                    <td>{{ $t->country->continent->name }}</td>
                                                    <td><a href="{{ route('admin.teams.edit',  $t->id) }}" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>
                                                        {!! Form::open(['method' => 'DELETE', 'route' => ['admin.teams.destroy', $t->id], 'class' => 'form-horizontal']) !!}
                                                        {!! Form::button( '<i class="fa fa-trash"></i>',['type' => 'submit', 'class' => 'btn btn-danger']) !!}
                                                        {!! Form::close() !!}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                        {{ $team->render() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

@stop

