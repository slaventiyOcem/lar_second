@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">{{ trans('tasks.index.page_name') }}</div>
                <div class="panel-body">
                    @include('common.errors')
                    <form action="{{route('tasks.store')}}" method="POST" class="form-horizontal">
                        {{csrf_field()}}
                        <div class="'form-group">
                            <label for="task" class="col-sm-3 control_label">Task</label>
                            <div class="col-sm-6">
                                <input type="text" name="name" id="task" class="form-control" value="{{old('name')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-plus">Create task</i>
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
