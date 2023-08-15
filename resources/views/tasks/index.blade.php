@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('tasks.index.page_name') }}</div>

                <div class="panel-body">
                    <a href="{{route('tasks.create')}}" class="btn btn-success"><i class="fa fa-plus">Create new task</i></a>
                    <table class="table table striped task_table">
                        <div class="panel-body">

                        </div>
                        <thead>

                        <tr>
                            <th>{{trans('tasks.index.columns.tasks')}}</th>
                            <th>{{trans('tasks.index.columns.action')}}</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($tasks as $task)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>
                                <td>
                                    <!--TODO кнопка удаления-->
                                </td>
                            </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
