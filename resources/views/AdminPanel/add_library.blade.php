@extends('AdminPanel.header')
@section('contain')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Add Library</h2>
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
                    <form action="/library" class="" method="post" enctype="multipart/form-data">
                    @csrf
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Librarian Name" name="l_name">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-4 col-xs-12">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Email ID" name="email">
                                    </div>
                                </div>
                             </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" placeholder="Extension No" name="extension_no">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <textarea rows="2" class="form-control no-resize" placeholder="Details" name="detail"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-4 col-xs-12">
                                {{ csrf_field()}}
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick" name="depart" required>
                                        <option value="">Select Department</option>
											@foreach ($departments as $dept)
                                        <option value="{{ $dept->dept_id}}">{{ $dept->depart_full_name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                {{ csrf_field()}}
                                <div class="form-group drop-custum">
                                    <select class="form-control show-tick" name="professor">
                                        <option value="">Select Professor</option>
											@foreach ($professors as $pro)
                                        <option value="{{ $pro->prof_id}}">{{ $pro->fname}} {{ $pro->lname}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div>
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-4 col-xs-12">
                                    <div class="dz-message">
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
                                </div>
                            </div>
                        </div>
                            <div class="row clearfix">
                                <div class="col-xs-12">
                                    <button type="submit" class="btn btn-raised g-bg-blush2">Submit</button>
                                    <button type="reset" class="btn btn-raised">Reset</button>
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
