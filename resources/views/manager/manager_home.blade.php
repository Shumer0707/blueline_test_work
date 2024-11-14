@extends('layouts.app')

@section('content')
    <h1>Заявки на рассмотрении</h1>
    {{-- <div class="container" style="width: 70%;">
        <div class="row">
          <div class="col-12">
            <ul class="list-group">
                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-center">
                        <button type="button" class="btn btn-danger btn-sm">Left Button</button>
                        <span class="flex-item">Username</span>
                        <span class="flex-item">Specialization</span>
                        <span class="flex-item">Doctors</span>
                        <span class="flex-item">Time intervals</span>
                        <button type="button" class="btn btn-success btn-sm">Right Button</button>
                    </div>
                </li>
                @foreach ($reservations as $el)
                <form action="">
                    <li class="list-group-item">
                        <div class="d-flex justify-content-between align-items-center">
                            <button type="button" class="btn btn-danger btn-sm">Left Button</button>
                                <span class="flex-item">{{$el->user['name']}}</span>
                                <span class="flex-item">{{$el->specialization['name']}}</span>
                                <span class="flex-item">
                                    <ul>
                                        @foreach ($el->doctors as $doctor)
                                            <li>{{$doctor->name}}</li>
                                        @endforeach
                                    </ul>
                                </span>
                                <span class="flex-item">
                                    <ul>
                                        @foreach (json_decode($el->preferred_slots, true) as $slots)
                                            <li>{{$slots}}</li>
                                        @endforeach
                                    </ul>
                                </span>
                                <button type="button" class="btn btn-success btn-sm">Right Button</button>

                        </div>
                    </li>
                </form>
                @endforeach
            </ul>

            <style>
                .flex-item {
                    width: 15%; /* Выравнивание ширины для каждого элемента */
                    text-align: center;
                }
                .list-group-item {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                }
            </style>
          </div>
        </div>
      </div> --}}
    <div class="container" style="width: 70%;">
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th style="width: 10%; text-align: center;"></th>
                            <th style="width: 20%; text-align: center;">Username</th>
                            <th style="width: 20%; text-align: center;">Specialization</th>
                            <th style="width: 20%; text-align: center;">Doctors</th>
                            <th style="width: 20%; text-align: center;">Time intervals</th>
                            <th style="width: 10%; text-align: center;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <form action="">
                            @foreach ($reservations as $el)
                            <tr>
                                <td class="text-center">
                                    <button type="button" class="btn btn-danger btn-sm">refuse</button>
                                </td>
                                <td class="text-center">{{$el->user['name']}}</td>
                                <td class="text-center">{{$el->specialization['name']}}</td>
                                <td>
                                    <ul class="list-unstyled mb-0">
                                        @foreach ($el->doctors as $doctor)
                                            <li>
                                                <input type="radio" name="doctor" value="{{$doctor->id}}" id="doctor_{{$doctor->id}}">
                                                <label for="doctor_{{$doctor->id}}">{{$doctor->name}}</label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <ul class="list-unstyled mb-0">
                                        @foreach (json_decode($el->preferred_slots, true) as $index => $slots)
                                            <li>
                                                <input  type="radio"
                                                        name="time_slot_{{$el->id}}"
                                                        value="{{$slots}}"
                                                        id="time_slot_{{$el->id}}_{{$index}}">
                                                <label for="time_slot_{{$el->id}}_{{$index}}">{{$slots}}</label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td class="text-center">
                                    <button type="button" class="btn btn-success btn-sm">confirm</button>
                                </td>
                            </tr>
                            @endforeach
                        </form>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <style>
        .table th, .table td {
            vertical-align: middle; /* Центрирование содержимого по вертикали */
        }
    </style>
@endsection
