@extends('frontend.layout')


@section('content')

        <div class="section-02 event-section">
            <div class="main-container">
                <div class="event-box">
                    {!! trans('front.events.title') !!}

                </div>
                <div class="event-text-box">
                    {!! trans('front.events.content') !!} 
                </div>
            </div>


        </div>
@endsection
