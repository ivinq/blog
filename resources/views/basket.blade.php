@extends('layouts/master')

@section('title', 'Корзина')

@section('content')
<div class="container">

        <h1 class="display-4">Корзина</h1>
        <p>Оформление заказа</p>
        <div class="panel">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Название</th>
                        <th>Количество</th>
                        <th>Цена</th>
                        <th>Стоимость</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($order->products as $product)
                    <tr>
                        <td>
                            <a href="{{route('product', [$product->category->code, $product->code])}}">
                                <img height="56px" src="{{ Storage::url($product->image) }}">
                                {{$product -> name}}
                            </a>
                        </td>
                        <td><span class="badge badge-pill badge-secondary">{{$product->pivot->count}}</span>
                            <div class="btn-group btn-group-toggle" role="group">
                                <form action="{{route('basket-remove', $product)}}" method="POST">
                                    <button type="submit" class="btn btn-danger btn-sm" href=""><ion-icon name="remove-outline"></ion-icon></button>
                                        @csrf
                                    </form>
                                    </div>
                                    <div class="btn-group btn-group-toggle" role="group">
                                    <form action="{{route('basket-add', $product)}}" method="POST">
                                        <button type="submit" class="btn btn-success btn-sm"
                                        href=""><ion-icon name="add-outline"></ion-icon></button>
                                        @csrf
                                    </form>
                                </div>
                            </td>
                            <td>{{$product -> price}}</td>
                            <td>{{$product -> getPriceForCount()}}</td>
                        </tr>
                        @endforeach

                        <tr>
                            <td colspan="3">Общая стоимость:</td>
                            <td>{{$order->getFullPrice()}} руб.</td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <div class="btn-group pull-right" role="group">
                    <a type="button" class="btn btn-success" href="{{route('basket-place')}}">Оформить заказ</a>
                </div>
            </div>

        @endsection