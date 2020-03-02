@extends('AdminPanel.header')
@section('contain')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>ADD Events</h2>
            <small class="text-muted">Welcome to  application</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
                    <form action="/event" class="" method="post" enctype="multipart/form-data">
                    @csrf
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group drop-custum">
								    {{ csrf_field() }}
                                    <select class="form-control show-tick" name="dept_id" required>
                                        <option value="">Select Department</option>
									        @foreach ($departments as $dept)
                                        <option value="{{ $dept->dept_id}}">{{ $dept->depart_short_name}}</option>
                                            @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="e_name" placeholder="Event Name" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <button type="submit" class="btn btn-raised g-bg-blush2">Submit</button>
                            <button type="submit" class="btn btn-raised">Cancel</button>
                        </div>
                    </div>
                    </form>
				</div>
			</div>
		</div>
    </div>
</section>
@endsection
