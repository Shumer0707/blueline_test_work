@extends('layouts.app')

@section('content')
    <h1 class="test">Оставьте вашу заявку</h1>
    <div class="container" style="width: 70%; margin-top: 50px;">
        <div class="row">
            <!-- Левый столбец с radio -->
            <div class="col-md-6">
                <h4>Выберите один из вариантов:</h4>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="optionsRadios" id="option1" value="option1">
                    <label class="form-check-label" for="option1">Вариант 1</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="optionsRadios" id="option2" value="option2">
                    <label class="form-check-label" for="option2">Вариант 2</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="optionsRadios" id="option3" value="option3">
                    <label class="form-check-label" for="option3">Вариант 3</label>
                </div>
            </div>

            <!-- Правый столбец с checkbox -->
            <div class="col-md-6">
                <h4>Выберите несколько опций:</h4>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkbox1" value="checkbox1">
                    <label class="form-check-label" for="checkbox1">Опция 1</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkbox2" value="checkbox2">
                    <label class="form-check-label" for="checkbox2">Опция 2</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="checkbox3" value="checkbox3">
                    <label class="form-check-label" for="checkbox3">Опция 3</label>
                </div>
            </div>
        </div>

        <!-- Кнопки снизу -->
        <div class="d-flex justify-content-start mt-4">
            <div class="w-50 mr-2">
                <button type="button" class="btn btn-danger w-50">Отмена</button>
            </div>
            <div class="w-50">
                <button type="button" class="btn btn-success w-50">Сохранить</button>
            </div>
        </div>
    </div>
@endsection
