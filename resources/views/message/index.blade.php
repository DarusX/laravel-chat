@extends('layouts.app')
@section('content')
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title">Messages</h4>
    </div>
    <div class="modal-body">

    </div>
    <div class="modal-footer">
        <form action="{{route('messages.store')}}" method="post">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" name="message" class="form-control" autocomplete="off">
            </div>
        </form>
    </div>
</div>
@endsection