@extends('layouts.app')

@section('content')

		<div class="row">
			<div class="panel-heading col-md-6 col-md-offset-3" >
						Post Feed
			</div>
		@forelse($articles as $article)
			<div class="col-md-6 col-md-offset-3">
					<div class="panel panel-default">
						
							<div class="panel-heading">
								<span>posted by ....</span>
								<span class="pull-right">{{ $article->created_at->diffForHumans() }}</span>

							</div>
							<div class="panel-body">
								{{ $article->content }}
							</div>

							<div class="panel-footer clearfix">
								<i class="fa fa-heart pull-right"></i>
							</div>
							
							
						
					</div>
				</div>
		@empty
		 No Article
				
		@endforelse		
		</div>

		<div class="col-md-6 col-md-offset-3">
			{{ $articles->links() }}
		</div>


@endsection