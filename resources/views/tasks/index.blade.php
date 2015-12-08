@extends('app')


@section('content')

    <template is="dom-bind">
        <td-model id="model" tasks="@{{tasks}}"></td-model>
        <td-tasks model-id="model" tasks="@{{tasks}}"></td-tasks>
    </template>
    
@endsection
