@extends('AdminPanel.header')
@section('contain')

<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h1>Update Professor Details....</h1>
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
					<form action="/updateprof/{{$findprof->prof_id}}"   method="post" enctype="multipart/form-data" role="form">
					@csrf
					{{method_field('PUT')}}
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="First Name" name="fname" value="{{$findprof->fname}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Last Name" name="lname" value="{{$findprof->lname}}" required>
                                    </div>
                                </div>
                            </div>
								 <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Qualification" name="Qualification" value="{{$findprof->Qualification}}"required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datepicker form-control" placeholder="Date of Birth" name="dob" value="{{$findprof->dob}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick" name="gender" required>
													{{$findprof->gender}}
												<option>Male</option>
												<option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="form-group drop-custum">
										
                                    <select class="form-control show-tick" name="depart" required>
                                        <option value="">Select Department</option>
											   {{ $findprof->depart_short_name}}
											   
											   @foreach ($departments as $dept)
                                        <option value="{{ $dept->dept_id}}">{{ $dept->depart_short_name}}</option>
                                       	@endforeach
                                    </select>
                                </div>
                            </div>
                           <div class="col-sm-3 col-xs-12">
                                <div class="form-group drop-custum">
										{{ csrf_field() }}
                                    <select class="form-control show-tick" name="position" required>
												{{$findprof->position}}
												<option>Prof</option>
												<option>Ass.Prof</option>
												<option>Prof.(Dr.)</option>
                                    </select>
                                </div>
                            </div>
								 <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize" placeholder="Area of Interest" name="area"required>{{$findprof->area_interest}}</textarea>
                                    </div>
                                </div>
                            </div>
								<div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Exprience" name="exprience" value="{{$findprof->exprience}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Phone" name="phone" value="{{$findprof->phone}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Enter Your Email"name="email" value="{{$findprof->email}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Website URL" name="url" value="{{$findprof->url}}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        								<div class="fallback">
                                        <input name="file" type="file" multiple  value="{{$findprof->proflie}}"/>
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
