<x-user-layout>
    <style>
        .productos {
            display: flex;
            flex-wrap: wrap;
            margin-left: 2rem;
            padding-left: 2rem;
        }

        .card {
            margin-left: 2rem;
            margin-top: 1rem;
        }
    </style>

    <div>
        <div class="productos">
            @foreach($products as $product)
                <div class="card">
                    <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text">{{ $product->description }}</p>
                        <a href="#" class="btn btn-primary">Ver detalles</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-user-layout>
