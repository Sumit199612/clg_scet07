@extends('AdminPanel.header')
@section('contain')

<section class="content">
		<div class="container-fluid">
			<div class="block-header">
				<div class="row">
					<div class="col-md-6 col-sm-12 col-xs-12">
						<h1>View Professors</h1>
						<small class="text-muted">Welcome to  application</small>
					</div>
				</div>
			</div>
			<div class="row clearfix">
				@foreach ($professors as $prof)
				<div class="col-md-6 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="body">
                        <div class="member-card verified">
                            <ul class="header-dropdown">
                                <li class="dropdown"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"><i class="zmdi zmdi-more-vert"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{$prof->prof_id.'/editprofessor'}}" class=" waves-effect waves-block">Edit</a></li>
                                        <li><a href="{{$prof->prof_id.'/delprofessor'}}" class=" waves-effect waves-block">Delete</a></li>
                                        <li><a href="{{'/profile/'.$prof->prof_id}}"  class=" waves-effect waves-block">View</a></li>
                                        <li><a href="{{$prof->prof_id.'/editachivement'}}" class=" waves-effect waves-block">Edit Achivement </a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="thumb-xl member-thumb">
                                    <img src='{{ $prof->proflie}}' class="img-circle" alt="profile-image">
                                    <i class="zmdi zmdi-info" title="Permanent"></i>
                                </div>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <div class="s-profile">
                                    <h4 class="m-b-5">{{ $prof->fname}} {{ $prof->lname}}</h4>
                                    <p class="text-muted">{{ $prof->area_interest}}<span> <a href="{{ $prof->email}}" class="text-pink">{{ $prof->email}}</a> </span></p>
                                    <p class="text-muted">{{ $prof->Qualification}}</p>
                                    <a href="{{'/profile/'.$prof->prof_id}}"  class="btn btn-raised btn-info m-t-20 m-b-20">View Profile</a>
										  <!--<a  class='btn bg-orange btn-circle waves-effect waves-circle waves-float zmdi zmdi-edit' href="{{$prof->prof_id.'/editprofessor'}}"></a>&nbsp; 
										  <a onClick='return del()' class='btn bg-deep-orange btn-circle waves-effect waves-circle waves-float zmdi zmdi-delete' href="{{$prof->prof_id.'/delprofessor'}}"></a> -->
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
					<a href="{{url('add_professor')}}" class="btn btn-raised btn-info m-t-20 m-b-20">Add Professors</a>
				</div>
			</div>
    </div>
</section>
@endsection
