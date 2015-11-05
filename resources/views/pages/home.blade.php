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
				Renowned personal injury trial attorney Colin Jones is dedicated to protecting the interests of injury victims throughout California. He has extensive experience handling a wide variety of serious cases, including brain injury, spinal cord injury, amputation, and wrongful death. He is as caring and compassionate with his clients as he is tenacious and aggressive with his opponents. A firm believer in justice, Colin represents only those who have been wronged, and uses his exceptional courtroom skills and strong sense of empathy to guide jurors towards truth so they can do right by victims. 
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