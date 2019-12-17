@extends("layouts.app")
@section('title','Form')
@section("content")
	
	<div class="container-fluid">
		<div class="row vh-100">
			<div class="col col-md-6 offset-md-3 col-lg-4 offset-lg-4 my-auto">
				{!! Form::open(['url' => 'foo/bar']) !!}
					<?= Form::label('username', 'Username') ?>
					<?= Form::text('username', '',['class'=>'form-control','placeholder'=>'Username']) ."<br/>"; ?>
					<?= Form::select('animal',[
    						'Cats' => ['leopard' => 'Leopard'],
    						'Dogs' => ['spaniel' => 'Spaniel'],
							], null, $attributes=['class'=>'custom-select']);?>

					<?= Form::password('password', ['class' => 'form-control my-2']); ?>

					<?= Form::file('image', $attributes = ['class'=>'my-2']); ?>
					<?= Form::select('size', ['L' => 'Large', 'S' => 'Small'], 'S'); ?>
					<?= Form::select('size', ['L' => 'Large', 'S' => 'Small'], null, ['placeholder' => 'Pick a size...']) ?>
					<?= Form::select('size', array('L' => 'Large', 'S' => 'Small'), null, array('multiple' => true)) ?>
				{!! Form::close() !!}

				<?= Form::open(['url' => 'foo/bar', 'method' => 'put', 'class'=>'my-5']) ?>
				<?= Form::label('email', 'E-Mail Address', ['class' => 'awesome']);?>
				<input type="text" class="form-control" name="email" placeholder="" value="">
				<?= Form::checkbox('name', '1');?>
				<?= Form::text('sample',$value='Values', $attributes=['class'=> 'form-control']) ?>		

				<?= Form::date('name', \Carbon\Carbon::now()); ?>
				<?= Form::number('name', 'a', ['max'=> 50, 'min'=> 0, 'step'=>2, 'class'=>'form-control']); ?>
				<?= Form::close() ?>
				
				<?php 
					//Form::model($user, ['route' => ['user.update', $user->id]])
					#echo "Test";

					Form::label('email', 'E-Mail Address', ['class' => 'awesome']);
				?>

				{!! Form::open(['url' => 'foo/bar','class'=>'bg-danger px-5 my-5']) !!}
					<input type="text" class="form-control" name="" placeholder="" value="">
				{!! Form::close() !!}

				<form method="POST" >
					@csrf
					<?= Form::selectRange('number', 1, 31) . ' '. Form::selectMonth('month', '1', $attributes=['class'=> 'custom-select']); ?>
					<input type="text" class="form-control" name="" placeholder="" value="">
					<?= Form::submit('Click Me!'); ?>
				</form>

				<?= link_to_action('SiteController@index', 'Home', null, ['class'=>'nav-link']) ?>
			</div>
		</div>
	</div>

@endsection