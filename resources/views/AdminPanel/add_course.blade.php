@extends('AdminPanel.header')
@section('contain')

<!-- main content -->
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h1>Add Course</h1>
            <small class="text-muted">Welcome to  application</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						<h2>Course Basic Information <small>Description text here...</small> </h2>
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
					<form action="/course"  method="post" enctype="multipart/form-data" role="form">
						@csrf
					<div class="body">                        
                        <div class="row clearfix">
                            <div class="col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Course Duration">
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-sm-3 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="number" class="form-control" placeholder="Course Price">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick">
                                        <option value="" checked>Select HOD</option>
                                        <option value="10">Male</option>
                                        <option value="20">Female</option>	
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick">
                                        <option value="" checked>Select Department</option>
                                        <option value="10">Male</option>
                                        <option value="20">Female</option>	
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize" placeholder="Course Description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-raised g-bg-blush2">Submit</button>
                                <button type="reset" class="btn btn-raised">Reset</button>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>        
    </div>
</section>
<!-- main content -->
@endsection
