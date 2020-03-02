@extends('AdminPanel.header')
@section('contain')

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>Edit Events</h2>
            <small class="text-muted">Welcome to  application</small>
        </div>
        <div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
                    <form action="/updateeve" class="" method="post" enctype="multipart/form-data">
                    @csrf
					<div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-4 col-xs-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="e_name" value ="{{$findeve->e_name}}" placeholder="Event Name" required>
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
