@extends('layouts/master')

@section('title', 'Оформить заказ')

@section('content')

<h1 class="display-4">Подтвердите заказ:</h1>
<div class="container">
    <div class="row justify-content-center">

        <form action="{{route('basket-confirm')}}" method="POST">
        <h4 class="display-4">Общая стоимость: <b>{{$order -> getFullPrice()}} руб.</b></h4>
        <p>Обязательно укажите верные контактные данные для того, чтобы сотрудник компании мог связаться с вами.</p>
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="name">Имя</label>
                      <input tylabelpe="text" name="name" id="name" value="" class="form-control" placeholder="Имя">
                  </div>
                  <div class="form-group col-md-6">
                      <label for="phone">Номер телефона</label>
                      <input type="text" name="phone" id="phone" value="" class="form-control" placeholder="Номер телефона">
                  </div>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="" class="form-control" placeholder="Е-майл">
            </div>
            @csrf
            <input type="submit" class="btn btn-success" value="Подтвердите заказ">
        </form>
    </div>
@endsection