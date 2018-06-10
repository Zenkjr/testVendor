@extends('layout.master')
@section('title','test')
@section('body')
{{--<nav class="navbar navbar-dark btn-group dropleft">--}}
    {{--<button class="btn bg-dark" data-toggle="modal" data-target="#demo">--}}
        {{--<span class="navbar-toggler-icon"></span>--}}
    {{--</button>--}}
{{--</nav>--}}

{{--<div id="demo" class="modal fade"  tabindex="-1" role="dialog" aria-hidden="true">--}}
        {{--<!-- Dropdown menu links -->--}}
        {{--<form>--}}
            {{--<div class="modal-header">--}}
                {{--<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>--}}
                {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
                    {{--<span aria-hidden="true">&times;</span>--}}
                {{--</button>--}}
            {{--</div>--}}
            {{--<p>drop lèt</p>--}}

        {{--</form>--}}
    {{--</div>--}}
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

        </div>
    </div>
</div>
    <div>helloword</div>
@endsection
