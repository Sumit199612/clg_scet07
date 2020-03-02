@extends('AdminPanel.header')
@section('contain')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>ALL Librarys...</h2>
            <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>All Librarys..</h2>
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
                    <div class="body">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                             <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Library Name</th>
                                    <th>Email Id</th>
                                    <th>Extension No</th>
                                    <th>Details</th>
                                    <th>Profile</th>
                                    <th>Departments</th>
                                    <th>Professor</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
							@foreach ($librarys as $lib)
                                <tr>
                                    <td>{{ $lib->l_id}}</td>
									     <td>{{ $lib->l_name}}</td>
                                    <td>{{ $lib->email}}</td>
                                    <td>{{ $lib->extension_no}}</td>
                                    <td>{{ $lib->details}}</td>
                                    <td><img src='{{ $lib->profile}}' width='50px'></td>
                                    <td>{{ $lib->depart_full_name}}</td>
                                    <td>{{ $lib->fname}} {{ $lib->lname}}</td>
									<td>
										<a  class='btn bg-orange btn-circle waves-effect waves-circle waves-float zmdi zmdi-edit' href="{{$lib->l_id.'/editLibrary'}}"></a>&nbsp;
										<a onClick='return del()' class='btn bg-deep-orange btn-circle waves-effect waves-circle waves-float zmdi zmdi-delete' href="{{$lib->l_id.'/delLibrary'}}"></a>
									</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
				<div class="col-xs-12 text-center">
					<a href="{{url('add_library')}}" class="btn btn-raised btn-info m-t-20 m-b-20">Add Library</a>
				</div>
			</div>
        </div>
    </div>
</section>
@endsection
