@extends('AdminPanel.header')
@section('contain')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>ALL Sub Events....</h2>
            <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>All Sub events</h2>
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
                                    <th>Event Name</th>
                                    <th>Department</th>
                                    <th>Sub Event Name</th>
                                    <th>Details</th>
                                    <th>Profile</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($sub_events as $event)
                                <tr>
                                    <td>{{$event->se_id}}</td>
                                    <td>{{$event->e_name}}</td>
                                    <td>{{$event->depart_full_name}}</td>
                                    <td>{{$event->se_name}}</td>
                                    <td>{{$event->details}}</td>
                                    <td><img src='{{$event->profile}}'width="40px"> </td>
                                    <td>
                                        <a class='btn bg-orange btn-circle waves-effect waves-circle waves-float zmdi zmdi-edit' href="{{$event->se_id.'/editsub_event'}}"></a>&nbsp;
                                        <a onClick='return del()' class='btn bg-deep-orange btn-circle waves-effect waves-circle waves-float zmdi zmdi-delete' href="{{$event->se_id.'/delsub_event'}}"></a>
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
					<a href="{{url('add_sub_event')}}" class="btn btn-raised btn-info m-t-20 m-b-20">Add Sub Events</a>
				</div>
			</div>
        </div>
    </div>
</section>
@endsection
