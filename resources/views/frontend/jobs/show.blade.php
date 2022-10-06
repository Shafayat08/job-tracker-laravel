@extends('layouts.frontend')

@section('banner', 'Job: '.$job->title)

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-10 post-list">
        <div style="column-gap: 3rem;" class="single-post d-flex flex-row align-items-center">
            <div class="thumb">
                @if($job->company && $job->company->logo)
                    <img src="{{ Storage::url('images/companies/'. $job->company->logo) }}" alt="{{ $job->company->name }}">
                @endif
            </div>
            <div class="details">
                <div class="title d-flex flex-row justify-content-between">
                    <div class="titles">
                        <a href="#"><h4>{{ $job->title }}</h4></a>
                        @if($job->company)
                            <h6>{{ $job->company->name }}</h6>		
                        @endif			
                    </div>
                </div>
                <p>
                    {{ $job->short_description }}
                </p>
                <h5>Job Nature: {{ $job->job_nature }}</h5>
                <p class="address"><span class="lnr lnr-map"></span> {{ $job->address }}</p>
                <p class="address"><span class="lnr lnr-database"></span> {{ $job->salary }}</p>
            </div>
        </div>	
        <div class="single-post job-details">
            <h4 class="single-title">Whom we are looking for</h4>
            <p>
                {{ $job->full_description }}
            </p>
        </div>
        <div class="single-post job-experience">
            <h4 class="single-title">Experience Requirements</h4>
            <p>
                {{ $job->requirements }}
            </p>
        </div>													
    </div>
</div>
@endsection