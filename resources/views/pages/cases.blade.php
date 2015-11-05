@extends('layouts.base')

@section('title', "Colin Jones' Cases")

@section('description', "Learn about the cases and cae types that attorney Colin Jones handles." )

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="header">
            <h1>Cases</h1>
            <h2>{{ config('attorney.first_name') }}'s cases</h2>
        </div>

        <div class="content">
	        <div class="content-inner">
		
				<h2 class="content-subhead">Case Types</h2>
	            <p>
	                Colin exclusively litigates high value cases with million dollar and multi-million dollar outcomes. It is expected that if he takes a case to court, there will be a seven figure (or greater) outcome for his clients. 
	            </p>

	            <h2 class="content-subhead">Recent Verdicts</h2>
		        <p>
		            Recently, Colin won a <strong>$1.5 million</strong> verdict in a premises liability case for a minor client who had only required $70,000 in medical expenses. Some of Colin’s other recent successes include <strong>$1.15 million</strong> for a dog bite victim (the single largest settlement in Illinois history for such a case), <strong>$2.35 million</strong> for a birth injury caused by hospital malpractice, and a <strong>$1.75 million</strong> settlement in a medical malpractice case for an orthopedic surgeon’s failure to diagnose compartment syndrome in a minor following a sports injury.
		        </p>

			
	        </div>
        </div>

@endsection