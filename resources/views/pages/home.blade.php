@extends('layouts.base')

@section('title', config('attorney.name'))

@section('sidebar')
    @parent
@endsection

@section('content')
	
    <div class="header">
            <h1>{{ config('attorney.name') }}</h1>
            <h2>California Trial Attorney</h2>
        </div>

        <div class="content">
        <div class="content-inner">
        
            <h2 class="content-subhead">Personal Injury Attorney</h2>
            <p>
				Renowned personal injury trial attorney Colin Jones is dedicated to protecting the interests of injury victims throughout California. 
            </p>
            <p>
                Colin has dedicated his legal career to the "little guy",  fighting insurance companies and corporations who try to duck responsibility by paying injured victims pennies on the dollar. Many attorneys "talk the talk" and  claim they are trial lawyers, but few "walk the walk" and take cases to jury verdict. When it’s time for battle, Colin is the trial warrior they send their cases to. With positive verdicts in three different states, Colin attributes his success to discovering his client's story and being able to share that with a jury.
            </p>
            <p>
            	For Colin, it is important to show the jurors that every client he represents, the compensation he is seeking is from stingy insurance companies, and not helpless individuals. By clearly communicating that compensation is being sought from monolithic corporations, he finds great success in acquiring compensation in line with the pain, suffering, personal injuries and damages to personal property, that his client's endured. 
            </p>

            <p style="text-align: center">
                <a class="button-xlarge pure-button pure-button-primary" href="{{ route('contact')}}">Contact {{ config('attorney.first_name') }}</a>
            </p>

            <blockquote>
	        	"It's a shame when an injury victim is not able to get the treatment he or she needs just because the insurance company wants to preserve their bottom line. I fight to make sure that doesn't happen." - Colin Jones
	        </blockquote>
            </div>
        </div>
    </div>

@endsection