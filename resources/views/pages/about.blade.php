@extends('layouts.base')

@section('title', 'About '. config('attorney.name') )


@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="header">
            <h1>About</h1>
            <h2>Meet {{ config('attorney.name') }}</h2>
    </div>

    <div class="content">
    	<div class="content-inner">
	        <h2 class="content-subhead">{{ config('attorney.first_name') }}'s Mission</h2>
	        <p>
	            Insurance companies and corporations often refuse to give injury victims the compensation they deserve because they have the wealth and resources to employ crack squads of claims reduction specialists and other financial and legal professionals. They know that, without legal help, victims have the odds stacked against them. 
	        </p>

			<p>
				Colin fights hard to even the odds and make victims whole. In every case, he diligently pursues high settlements and verdicts because he believes that no amount of money can really make up for the loss of a limb, the loss of security, the loss of the ability to lead a normal life, or the loss of life itself. 
			</p>

			<p>
				Colin also believes that the result of a single negligence lawsuit can affect a community, a city, even the whole country, especially when large companies – hospitals, trucking companies, bus companies, product manufacturers, etc. – are involved. Since these entities are usually worth millions, sometimes billions of dollars, a small settlement is unlikely to catch their attention. However, a large verdict makes them feel the impact of their decisions, making them more likely to uphold safety regulations in order to avoid future litigation, which benefits everybody. 
	        </p>

	        <h2 class="content-subhead">Recognition</h2>

			<p>
				A highly decorated attorney, Colin is recognized by multiple prestigious legal institutions, including <strong>The National Trial Lawyers (Top 100 and Top 40 Under 40) and The National Academy of Personal Injury Attorneys (Top 10 Ranking 2014)</strong>.  
	        </p>
        </div>
    </div>

@endsection