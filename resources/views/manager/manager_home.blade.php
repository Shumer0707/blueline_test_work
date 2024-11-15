@extends('layouts.app')

@section('content')
    <h1>Applications under consideration</h1>
    <div class="container" style="width: 70%; margin: auto;">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="container" style="width: 70%; margin: auto;">
            @if (!empty($update_response))
                <div class="alert alert-success">
                    {{ $update_response }}
                </div>
            @endif
            <div class="row">
                <div class="col-12">
                    @foreach ($reservations as $el)
                    <form action="{{ route('manager.updateRequest') }}" method="post" id="main_form_{{$el->id}}" class="card mb-3 shadow-sm">
                        @csrf
                        <input type="hidden" name="id" id="reservation_id" value="{{$el->id}}">

                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-start mb-3">
                                <div style="flex: 1; text-align: left;">
                                    <strong>Time of creation:</strong><br>
                                    {{ $el->user['created_at'] }}
                                </div>
                                <div style="flex: 1; text-align: left;">
                                    <strong>Specialization:</strong><br>
                                    {{ $el->specialization['name'] }}
                                </div>
                                <div style="flex: 1; text-align: left;">
                                    <strong>Doctors:</strong><br>
                                    <select name="doctor" class="form-select form-select-sm" style="width: 100%;">
                                        @foreach ($el->doctors as $doctor)
                                            <option value="{{ $doctor->name }}">{{ $doctor->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div style="flex: 1; text-align: left;">
                                    <strong>Time Intervals:</strong><br>
                                    <select name="time_slot" class="form-select form-select-sm" style="width: 100%;">
                                        @foreach (json_decode($el->preferred_slots, true) as $slots)
                                            <option value="{{ $slots }}">{{ $slots }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer d-flex justify-content-between align-items-center bg-light">
                            <button type="submit" class="btn btn-danger btn-sm" name="status" value="refuse">Refuse</button>
                            <button type="submit" class="btn btn-success btn-sm" name="status" value="approved">Approve</button>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection
