@extends('layouts.base')

@section('title', 'Attorney '.config('attorney.name'))

@section('description', "Colin Jones is one of the nation's top trial lawyers. He is a plaintiff's attorney who specializes in major accident and catastrophic injury cases in California." )

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
				Colin Jones is a personal injury trial lawyer dedicated to helping injury victims who have been wronged. A lawyer of the people, he never pursues cases against individuals, but only large entities. Always a fair and willing negotiator, Colin resorts to litigation only when the defendant refuses to settle in good faith. He cannot and does not tolerate dishonest insurance companies and corporations that think they can use their power and resources to bully vulnerable injury victims into submission, and he fights tenaciously to make them pay for their offenses in court.  
            </p>
            <p>
                When it's time for trial, Colin battles with integrity. His sole winning strategy is to discover his client's story and share that with the jury. He has faith in his clients and the court system, and believes that jurors only need to hear the truth in order to make the right call. 
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