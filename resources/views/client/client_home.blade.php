@extends('layouts.app')

@section('content')
    <h1 class="test">Leave your request</h1>
    <div class="container" style="width: 70%; margin-top: 50px;">
        <form action="{{route('client.createRequest')}}" method="post">
            @csrf
            <div class="row">
                <!-- Left column radio -->
                <div class="col-md-6">
                    <h4>What kind of specialist do you need?:</h4>
                    @foreach ($specializations as $el)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="specializations" id="{{$el->id}}" value="{{$el->id}}">
                            <label class="form-check-label" for="{{$el->id}}">{{$el->name}}</label>
                        </div>
                    @endforeach
                </div>

                <!-- Right column checkbox -->
                <div class="col-md-6">
                    <h4>What time is convenient for you?:</h4>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="reception_time[]" id="checkbox1" value="from 8 to 11">
                        <label class="form-check-label" for="checkbox1">from 8 to 11</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="reception_time[]" id="checkbox2" value="from 11 to 13">
                        <label class="form-check-label" for="checkbox2">from 11 to 13</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="reception_time[]" id="checkbox3" value="from 13 to 18">
                        <label class="form-check-label" for="checkbox3">from 13 to 18</label>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-start mt-4">
                <div class="w-50 mr-2">
                    <button type="reset" class="btn btn-danger w-50">Cancel</button>
                </div>
                <div class="w-50">
                    <button type="submit" class="btn btn-success w-50">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
