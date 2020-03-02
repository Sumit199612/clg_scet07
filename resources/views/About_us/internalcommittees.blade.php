@extends('layouts.app')
@section('content')
<style>
.event-list {
    padding: 20px 20px 100px;
    border: 0px solid #333333;
}
</style>

<section class="clearfix-page">
    <div class="container">
        <div class="row">
           <div class="col-md-3 col-sm-12">
                <div class="event-details-sidebar">
                    <div class="enother-event-details">
                        <div class="event-list">
                            <b>{!! menu('AboutusScetcomeeteesMenus') !!}</b>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<div class="col-md-9 col-sm-12">
		</div>
    </div>
</section>
@endsection