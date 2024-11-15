@extends('layouts.app')

@section('content')
    <h1>All applications</h1>
    <div class="container" style="width: 70%;">
        <div class="row">
          <div class="col-12">
            <ul class="list-group">
                @foreach ($reservations as $el)
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                        <span>{{$el->user->name}}</span>
                        <span>{{$el->created_at}}</span>
                        <span>{{$el->status}}</span>
                        </div>
                    </li>
                @endforeach
            </ul>
            {{ $reservations->links('pagination::bootstrap-5') }}
          </div>
        </div>
    </div>
@endsection
