@extends('base')

@section('title', 'Home')

{{--@section('header')--}}
{{--@endsection--}}

@section('content')
    @foreach($events as $event)
        <div>
            <p>{{ $event['summary'] }}</p>
            <p>
                @if (isset($event['start']['dateTime']))
                    {{ date('m-d-Y h:ia', strtotime($event['start']['dateTime'])) }}
                @else
                    {{ date('m-d-Y', strtotime($event['start']['date'])) }}
                @endif

                @if (isset($event['start']['date']) && $event['start']['date'] == $event['end']['date'])
                    (All Day)
                @elseif (isset($event['end']['dateTime']))
                    &ndash; {{ date('m-d-Y h:ia', strtotime($event['end']['dateTime'])) }}
                @else
                    &ndash; {{ date('m-d-Y', strtotime($event['end']['date'])) }}
                @endif
            </p>
            <p>{{ (isset($event['location']) ? $event['location'] : 'TBD') }}</p>
            <p>{{ (isset($event['description']) ? $event['description'] : 'none') }}</p>
        </div>
    @endforeach
@endsection
