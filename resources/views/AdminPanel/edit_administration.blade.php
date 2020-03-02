@extends('AdminPanel.header')
@section('contain')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Edit Administration</h2>
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
                    <form action="/updateadministration/{{$findadmi->a_id}}" class="" method="post" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="a_name" value="{{$findadmi->a_name}}" placeholder="Administration Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="designation" value="{{$findadmi->designation}}" placeholder="Designation">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="qualification" value="{{$findadmi->qualification}}" placeholder="Qualification">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="expirence" value="{{$findadmi->expirence}}" placeholder="Expirence">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="email" value="{{$findadmi->email}}" placeholder="Enter Your Email">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="phone" value="{{$findadmi->phone}}" placeholder="Phone">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group drop-custum">
                                {{-- {{ csrf_field() }} --}}
                                    <select class="form-control show-tick"  name="role">
                                        <option>-- Role --</option>
                                        {{$findadmi->role}}
                                        <option>Admin</option>
                                        <option>Sub Admin</option>
                                        <option>Administration</option>
                                        <option>Librarian</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-12">
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> </div>
                                         <div class="fallback">
                                        <input name="image" type="file" multiple />
                                    </div>
                            </div>
                        </div>
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
