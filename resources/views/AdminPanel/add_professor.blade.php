@php
    $edit = !is_null($dataTypeContent->getKey());
    $add  = is_null($dataTypeContent->getKey());
@endphp

@extends('voyager::master')
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .panel .mce-panel {
            border-left-color: #fff;
            border-right-color: #fff;
        }

        .panel .mce-toolbar,
        .panel .mce-statusbar {
            padding-left: 20px;
        }

        .panel .mce-edit-area,
        .panel .mce-edit-area iframe,
        .panel .mce-edit-area iframe html {
            padding: 0 10px;
            min-height: 350px;
        }

        .mce-content-body {
            color: #555;
            font-size: 14px;
        }

        .panel.is-fullscreen .mce-statusbar {
            position: absolute;
            bottom: 0;
            width: 100%;
            z-index: 200000;
        }

        .panel.is-fullscreen .mce-tinymce {
            height:100%;
        }

        .panel.is-fullscreen .mce-edit-area,
        .panel.is-fullscreen .mce-edit-area iframe,
        .panel.is-fullscreen .mce-edit-area iframe html {
            height: 100%;
            position: absolute;
            width: 99%;
            overflow-y: scroll;
            overflow-x: hidden;
            min-height: 100%;
        }
    </style>
@stop

@section('page_title', __('voyager::generic.'.($edit ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('contain')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h1>Add Professor</h1>
            <small class="text-muted">Welcome to  application</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>Basic Information <small>Description text here...</small> </h2>
						<ul class="header-dropdown m-r--5">
							<li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="zmdi zmdi-more-vert"></i></a>
								<ul class="dropdown-menu pull-right">
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
									<li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
								</ul>
							</li>
						</ul>
					</div>
					<form action="/store"  method="post" enctype="multipart/form-data" role="form">
					@csrf
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="First Name" name="fname" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Last Name" name="lname" required>
                                    </div>
                                </div>
                            </div>
							 </div>
                        <div class="row clearfix">
								 <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Qualification" name="Qualification" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datepicker form-control" placeholder="Date of Birth" name="dob" required>
                                    </div>
                                </div>
                            </div>
							 </div>
                        <div class="row clearfix">
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group drop-custum">
										{{ csrf_field() }}
                                    <select class="form-control show-tick" name="gender" required>
                                        <option value="">Select Gender</option>
												<option>Male</option>
												<option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group drop-custum">
										{{ csrf_field() }}
                                    <select class="form-control show-tick" name="depart" required>
                                        <option value="">Select Department</option>
												@foreach ($departments as $dept)
                                        <option value="{{ $dept->dept_id}}">{{ $dept->depart_short_name}}</option>
                                       	@endforeach
                                    </select>
                                </div>
                            </div>
                           <div class="col-sm-4 col-xs-12">
                                <div class="form-group drop-custum">
										{{ csrf_field() }}
                                    <select class="form-control show-tick" name="position" required>
                                        <option value="">Select Position</option>
												<option>Prof</option>
												<option>Ass.Prof</option>
												<option>Prof.(Dr.)</option>
                                    </select>
                                </div>
                            </div>
							 </div>
                        <div class="row clearfix">
								 <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="2" class="form-control no-resize" placeholder="Area of Interest" name="area"required></textarea>
                                    </div>
                                </div>
                            </div>
								<div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Exprience" name="exprience" required>
                                    </div>
                                </div>
                            </div>
							 </div>
                        <div class="row clearfix">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Phone" name="phone" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Enter Your Email"name="email" required>
                                    </div>
                                </div>
                            </div>
							</div>
                        <div class="row clearfix">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Website URL" name="url" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        								<div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-raised g-bg-blush2">Submit</button>
                                <button type="reset" class="btn btn-raised g-bg-blush2">Reset</button>
                            </div>
                        </div>
                    </div>
					</form>
				</div>
			</div>
		</div>
    </div>
</section>
@endsection
