@extends('layouts.app')

@section('content')
    <h1>History of your applications</h1>
    <div class="container" style="width: 70%;">
        <div class="row">
          <div class="col-12">
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Specializations</span>
                        <span>Time frame</span>
                        <span>Status</span>
                    </div>
                </li>
                @foreach ($reservations as $el)
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <span>{{$el->specialization['name']}}</span>
                            <span>{{$el->preferred_slots}}</span>
                            <span>{{$el->status}}</span>
                        </div>
                    </li>
                @endforeach
            </ul>
          </div>
        </div>
      </div>
@endsection
