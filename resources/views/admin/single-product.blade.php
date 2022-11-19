<x-layout
    title="Vista Producto"
    meta-description="Vista Producto meta description"
>
    <x-layout-admin>

        <div class="bg-light">
            <div class="row mx-1">
                <h3 class="display-6 text-muted text-center py-3">{{ $product->category->name }}</h3>

                <div class="col-12 col-lg-6 mb-3 p-1 text-center">

                    <h2 class="display-6 fs-4 text-success py-3">{{ $product->name }}</h2>

                    <img src="{{ $product->picture }}" class="img-fluid mx-auto "
                        style="width: 300px; height:auto; background-position: center center;" alt="">

                    <span class="fs-6 badge text-bg-success my-3">
                        {{ number_format($product->price, 2, ',', '.') }} €</span>

                    <p>{{ $product->short_description }}</p>

                </div>


                <div class="col-12 col-lg-6 p-2 bg-light text-secondary">

                    <h1 class="display-5 text-dark">{{ old('$product->name') }}</h1>
                    <x-layout-admin.form-components.errors />
                    <form action="{{ route('update-product', $product) }}" method="post" enctype="multipart/form-data">
                        @csrf @method('patch')
                        <div class="row mb-3">
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="name" id="name"
                                        placeholder="Nombre del producto" value="{{ old('name') }}">
                                    <label for="name">Nombre del producto</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" style="height: 6em; resize:none" name="short_description" id="short_description"
                                        placeholder="Descripción Corta">{{ old('short_description') }}</textarea>
                                    <label for="short_description">Descripción Corta</label>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text text-bg-dark bg-opacity-75">Categoría</span>
                                    <select name="category_id" id="category_id" class="form-select">
                                        <option value="">-- Selecciona una categoría --</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $category->id == old('category_id') ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" type="number" name="price" id="price"
                                            placeholder="0" min="0" step="0.01" value="{{ old('price') }}">
                                        <label for="price">Precio</label>
                                    </div>
                                    <span class="input-group-text text-bg-dark bg-opacity-75">€</span>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" type="number" name="stock" id="stock"
                                            placeholder="0" min="0" value="{{ old('stock') }}">
                                        <label for="stock">Stock</label>
                                    </div>
                                    <span class="input-group-text text-bg-dark bg-opacity-75">Unidades</span>
                                </div>

                                <div class="input-group my-3">
                                    <span class="input-group-text text-bg-dark bg-opacity-75">
                                        <i class="bi bi-image">
                                        </i>
                                    </span>
                                    <div class="form-floating">
                                        <label for="picture" class="text-center"
                                            style="background-color:rgb(12, 172, 148);">
                                            <i class="bi bi-upload text-light">
                                                Busca o arrastra una image aquí
                                            </i>
                                        </label>
                                        <input class="form-control" name="picture" type="file" id="picture" value="{{ old('picture') }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Actualiza producto</button>
                    </form>

                </div>
            </div>

            <hr>

        </div>
    </x-layout-admin>
</x-layout>
