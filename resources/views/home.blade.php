@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Modal</div>
                <div class="panel-body">
                    <button id="show-modal" @click="showModal = true">Show Modal</button>
                    <!-- use the modal component, pass in the prop -->
                    <modal v-if="showModal" @close="showModal = false">
                        <!--
                        you can use custom content here to overwrite
                        default content
                        -->
                        <h3 slot="header">custom header</h3>
                    </modal>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection