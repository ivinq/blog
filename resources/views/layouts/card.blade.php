
<div class="col-sm-6 col-md-4">
    <div class="thumbnail">
        <img src="{{ Storage::url($product->image) }}" alt="iPhone X 64GB">
        <div class="caption">
            <h4>
                {{$product->name}}
            </h4>
            <p>
                {{$product->price}} ₽
            </p>
            <p>
                <form action="{{route('basket-add', $product)}}" method="POST">
                    <button type="submit" class="btn btn-primary" role="button">В корзину</button>
                    {{-- {{$product->getCategory()->name}} --}}
                    <a href="{{route('product', [$product->category->code, $product->code])}}"
                    class="btn btn-outline-primary" role="button">Подробнее</a>
                    @csrf
                </form>
                </p>
            </div>
        </div>
    </div>