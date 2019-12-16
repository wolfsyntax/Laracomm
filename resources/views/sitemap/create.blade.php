@extends("layouts.app")

@section("content")
	
	<div class="container-fluid">
		<div class="row vh-100">
			<div class="col col-md-6 offset-md-3 col-lg-4 offset-lg-4 my-auto">
				{!! Form::open(['url' => 'foo/bar']) !!}
					<?= Form::label('username', 'Username') ?>
					<?= Form::text('username', '',['class'=>'form-control','placeholder'=>'Username']); ?>

					<?= Form::password('password', ['class' => 'form-control my-2']); ?>

					<?= Form::file('image', $attributes = ['class'=>'my-2']); ?>

				{!! Form::close() !!}

				<?= Form::open(['url' => 'foo/bar', 'method' => 'put', 'class'=>'my-5']) ?>
					<input type="text" class="form-control" name="" placeholder="" value="">					
				<?= Form::close() ?>

				{!! Form::open(['url' => 'foo/bar','class'=>'bg-danger px-5 my-5']) !!}
					<input type="text" class="form-control" name="" placeholder="" value="">
				{!! Form::close() !!}

				<form method="POST" >
					@csrf
					<input type="text" class="form-control" name="" placeholder="" value="">
				</form>
			</div>
		</div>
	</div>

@endsection