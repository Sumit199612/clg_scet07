@extends('AdminPanel.header')
@section('contain')
<style>
.member-card .member-thumb img {
    width: 115px;
 }
</style>
<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h1>All Administration</h1>
						<small class="text-muted">Welcome to  application</small>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				@foreach ($administrations as $admi)
				<div class="col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="member-card verified">
                            <ul class="header-dropdown">
                                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{$admi->a_id.'/editAdministration'}}" class=" waves-effect waves-block">Edit</a></li>
                                        <li><a href="{{$admi->a_id.'/delAdministration'}}" class=" waves-effect waves-block">Delete</a></li>
                                        {{-- <li><a href="{{'image/'.$admi->a_id}}"  class=" waves-effect waves-block">View</a></li> --}}
                                    </ul>
                                </li>
                            </ul>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="thumb-xl member-thumb">
                                    <img src='{{ $admi->image}}' class="img-circle"  alt="profile-image">
                                    <i class="zmdi zmdi-info" title="Permanent"></i>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="s-profile">
                                    <h4 class="m-b-5">{{ $admi->a_name}}</h4>
                                    <span>{{ $admi->designation}}</span>
                                    <span>{{ $admi->email}}</span>
                                    <span>{{ $admi->role}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
				@endforeach
			</div>
			<div class="row clearfix">
				<div class="col-xs-12 text-center">
					<a href="{{url('add_administration')}}" class="btn btn-raised btn-info m-t-20 m-b-20">Add Administrations</a>
				</div>
			</div>
    </div>
</section>
@endsection

