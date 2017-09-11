@extends('app')

@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-push-2">
            <h1>Upcoming Events</h1>

            @forelse($upcomingEvents as $event)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a href="{{ route('events.show', $event) }}">{{ $event->title }}</a>
                            <small class="m-l-5">{{ $event->address }}</small>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="meta-data m-b-15">
                            <dl class="dl-horizontal">
                                <dt>Beginning at:</dt>
                                <dd>{{ $event->started_at }}</dd>
                                <dt>Ending at:</dt>
                                <dd>{{ $event->ended_at }}</dd>
                                <dt>Created by:</dt>
                                <dd>{{ $event->ended_at }}</dd>
                            </dl>
                        </div>

                        <div class="description">
                            {{ $event->description }}
                        </div>
                    </div>
                </div>
            @empty
                <p>There are not upcoming events yet...</p>
            @endforelse
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8 col-sm-push-2">
            <h1>Past Events</h1>

            @forelse($pastEvents as $event)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <a href="{{ route('events.show', $event) }}">{{ $event->title }}</a>
                            <small class="m-l-5">{{ $event->address }}</small>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="meta-data m-b-15">
                            <dl class="dl-horizontal">
                                <dt>Beginning at:</dt>
                                <dd>{{ $event->started_at }}</dd>
                                <dt>Ending at:</dt>
                                <dd>{{ $event->ended_at }}</dd>
                                <dt>Created by:</dt>
                                <dd>{{ $event->ended_at }}</dd>
                            </dl>
                        </div>

                        <div class="description">
                            {{ $event->description }}
                        </div>
                    </div>
                </div>
            @empty
                <p>There are not past events yet...</p>
            @endforelse
        </div>
    </div>
@endsection
