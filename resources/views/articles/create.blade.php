@extends('layouts.app')

@section('content')

		<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-default">
						<div class="panel-heading">
						Create Article
							<div class="panel-body">
								<form action="/articles" method="POST">
								{{ csrf_field() }}
								<input type="hidden" name="user_id" 
								value="{{ Auth::user()->id }}">
									<div class="form-group">
									<label for="content">Content</label>
									<textarea class="form-control" name="content"></textarea>
									</div>
									<div class="checkbox">
										<label>
											<input type="checkbox" name="live">
											Live
										</label>
									</div>
									<div class="form-group">
										<label for="post_on">Post On</label>
										<input type="datetime-local" name="post_on" class="form-control">
									</div>

									<button type="submit" class="btn btn-primary pull-right" >Create</button>
								</form>
							</div>
							
							
						</div>
					</div>
				</div>
				
			</div>


@endsection