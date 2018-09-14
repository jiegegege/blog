@extends('layouts.default')
@section('content')
    <div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist" id="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li>
     <li role="presentation"  class="pull-right hidden-sm hidden-xs"><a href="#more" aria-controls="more" role="tab" data-toggle="tab"  >more</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane fade in active" id="home">home</div>
    <div role="tabpanel" class="tab-pane fade" id="profile">profile</div>
    <div role="tabpanel" class="tab-pane fade" id="messages">message</div>
    <div role="tabpanel" class="tab-pane fade" id="settings">settings</div>
    <div role="tabpanel" class="tab-pane fade" id="more">more</div>
  </div>
  </div>

</div>
@stop
