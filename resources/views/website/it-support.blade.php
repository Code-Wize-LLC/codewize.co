@extends('partials.website', [
    'title' => 'Managed IT Support & Helpdesk Services',
])
@section('content')
    @include('website.partials.it-support.hero')
    @include('website.partials.it-support.services')
    @include('website.partials.it-support.how-it-works')
    @include('website.partials.it-support.cta')
    @include('website.partials.it-support.related-services')
@endsection
