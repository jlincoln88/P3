@extends('layouts.master')

@section('content')
	<div class='container'>
		
		<h1>Welcome to Dev's Best Friend!</h1>
		<h4>
			Here, you'll find a couple of useful tools.
		</h4> 
		<p>
			First, a Lorem Ipsum generator which can generate
			up to 99 paraghraphs of filler text! This generator is powered by Badcow's Lorem-Ipsum
			package. <a class='linkypoo' href="/loremipsum">Check it out here!</a>
		</p>
		<p>
			Second is the random user generator. This tool, as you might suspect, generates random users!
			You have a few additional options to choose from with this tool - you can choose to add a birthday,
			a location, a small profile, or any combination of the three! This tool is powered by the
			Faker package. <a class='linkypoo' href="/randomuser">Check it out here!</a>
		</p>
		<p>
			Sadly, the xkcd password generator is not yet functional, but it will be soon!
		</p>
	</div>
@stop
