@extends('layouts.base')

@section('title', 'Contact')

@section('description', "Contact Wilshire Law Firm, or attorney Colin Jones specifically." )

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="header">
            <h1>Contact</h1>
            <h2>Contacting {{ config('attorney.name') }}</h2>
        </div>

        <div class="content">

        <div class="content-inner">
<div class="pure-g">
    <div class="pure-u-1">
		<h2 class="content-subhead">Contact {{ config('attorney.first_name') }}</h2>
        <p>
            Want to get in touch with {{ config('attorney.first_name') }}? Call the offices of Wilshire Law Firm, or 
            submit an online contact form to connect with a dedicated legal staff member. The 
            sooner we can get started on your case, the better chances you'll have of obtaining 
            full and fair compensation from the liable party. Don't delay – contact {{ config('attorney.first_name') }}  today!
        </p>
        
    </div>
    <div class="pure-u-1">
		<form class="pure-form pure-form-stacked attorney-contact-form" method="post" action="{{ route('contact-store') }}">
		    

			@if (count($errors) > 0)
			    <div class="alert alert-danger">
			        <ul>
			            @foreach ($errors->all() as $error)
			                <li>{{ $error }}</li>
			            @endforeach
			        </ul>
			    </div>
			@endif


		    <fieldset>
		        <div class="pure-control-group">
		            <label for="name">Name</label>
		            <input id="name" type="text" name="name" value="{{ old('name') }}" class="pure-input-1" placeholder="Full Name">
		        
		        </div>

		        <div class="pure-control-group">
		            <label for="email">Email Address</label>
		            <input id="email" type="email" name="email" value="{{ old('email') }}" class="pure-input-1" placeholder="Email Address">
		        </div>

		        <div class="pure-control-group">
		            <label for="phone">Phone</label>
		            <input id="phone" type="text" name="phone" value="{{ old('phone') }}" class="pure-input-1" placeholder="Phone">
		        </div>

		        <div class="pure-control-group">
		            <label for="message">Message</label>
		            <textarea name="message" id="message" class="pure-input-1" placeholder="Enter your message to {{ config('attorney.first_name') }} here.">{{ old('message') }}</textarea>
		        </div>

				<div class="pure-control-group">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
		            <button type="submit" class="pure-button pure-button-primary pure-input-1">Submit</button>
				</div>
		    </fieldset>
		</form>
</div>
    </div>
</div>







        </div>

@endsection