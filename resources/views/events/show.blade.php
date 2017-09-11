@extends('app')

@section('content')
    <div class="row">
        <div class="col-sm-6 col-sm-push-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{ $event->title }}</h3>
                </div>
                <div class="panel-body">
                    <p><strong>Description:</strong></p>
                    {{ $event->description }}
                </div>

                <div id="map"></div>

                <table class="table table-condensed table-striped table-bordered">
                    <tr>
                        <th>Starting at</th>
                        <td>{{ $event->started_at }}</td>
                    </tr>
                    <tr>
                        <th>Ending at</th>
                        <td>{{ $event->ended_at }}</td>
                    </tr>
                    <tr>
                        <th>Event Address</th>
                        <td><a href="#">{{ $event->address }}</a></td>
                    </tr>
                    <tr>
                        <th>Created by</th>
                        <td><a href="#">{{ $event->creator->name }}</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        #map {
            height: 200px;
            width: 100%;
        }
    </style>
@endpush

@push('scripts')
    <script>
        function initMap() {
            var uluru = {lat: {{ $event->latitude }}, lng: {{ $event->longitude }} };
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 4,
                center: uluru
            });
            var marker = new google.maps.Marker({
                position: uluru,
                map: map
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key={{ config('googleapis.maps.api_key') }}&callback=initMap" async defer></script>
@endpush
