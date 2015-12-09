@extends('app')


@section('content')

    <template is="dom-bind">
        <td-model id="model" tasks="@{{tasks}}" loading="@{{loading}}"></td-model>
        <td-tasks model-id="model" tasks="@{{tasks}}" loading="@{{loading}}"></td-tasks>
    </template>
    
@endsection
