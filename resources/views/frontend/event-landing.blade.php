@extends('frontend.layout')


@section('content')

        <div class="section-02 event-section">
            <div class="main-container">
                <a href="event_chinese-valentine.html">
                    <div class="event-box">
                        {!! trans('front.events.chinese-valentine-title') !!}
                    </div>
                </a>
                <a href="event.html">
                    <div class="event-box">
                        {!! trans('front.events.title') !!}
                    </div>
                </a>
            </div>


        </div>
@endsection