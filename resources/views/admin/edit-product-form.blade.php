<x-layout
    title="Edit product"
    meta-description="Edit product meta description"
>
    <x-layout-admin>

        <div class="bg-transparent rounded-3">
            <h3 class="display-6 text-light text-center mb-3">Categoria {{ $product->category->name }}</h3>
            <div class="row justify-content-center">

                <div class="col-12 col-lg-5 text-center bg-light my-1 rounded-3 me-4">


                    <h2 class="col-12 display-6 fs-6 badge text-bg-success text-light my-3">{{ $product->name }}</h2>



                    <img src="{{ $product->picture }}" class="rounded-3 mx-auto mb-3"
                        style="width:300px; background-position: center center;" alt="">

                    <span class="fs-6 badge text-bg-success mb-3">
                        {{ number_format($product->price, 2, ',', '.') }} €</span>

                    <p class="text-secondary">{{ $product->short_description }}</p>




                </div>



                <div class="col-12 col-lg-5 bg-light text-secondary rounded-3 my-1">

                    <h1 class="display-5 text-dark">{{ old('$product->name') }}</h1>
                    <x-layout-admin.form-components.errors />
                    <form action="{{ route('update-product', $product) }}" method="post" enctype="multipart/form-data">

                        @csrf @method('patch')

                        <div class="row mb-3">
                            <div class="col-12">

                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="name" id="name"
                                        placeholder="Nombre del producto" value="{{ $product->name }}">
                                    <label for="name">Nombre del producto</label>
                                </div>

                                <div class="form-floating mb-3">
                                    <textarea class="form-control" style="height: 6em; resize:none" name="short_description" id="short_description"
                                        placeholder="Descripción Corta">{{ $product->short_description }}</textarea>
                                    <label for="short_description">Descripción</label>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text text-bg-dark bg-opacity-75">Categoría</span>
                                    <select name="category_id" id="category_id" class="form-select">
                                        <option value="">-- Selecciona una categoría --</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $category->id == $product->category_id ? 'selected' : '' }}>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" type="number" name="price" id="price"
                                            placeholder="0" min="0" step="0.01"
                                            value="{{ $product->price }}">
                                        <label for="price">Precio</label>
                                    </div>
                                    <span class="input-group-text text-bg-dark bg-opacity-75">€</span>
                                </div>

                                <div class="input-group mb-3">
                                    <div class="form-floating">
                                        <input class="form-control" type="number" name="stock" id="stock"
                                            placeholder="0" min="0" value="{{ $product->stock }}">
                                        <label for="stock">Stock</label>
                                    </div>
                                    <span class="input-group-text text-bg-dark bg-opacity-75">Unidades</span>
                                </div>

                                <div class="input-group mb-2">
                                    <span class="input-group-text text-bg-dark bg-opacity-75">
                                        <i class="bi bi-image">
                                        </i>
                                    </span>
                                    <div class="form-floating">
                                        <label for="picture" class="text-end"
                                            style="background-color:rgb(12, 172, 148);">
                                            <i class="bi bi-upload text-light">&nbsp; {{ $product->picture }}</i>
                                        </label>
                                        <input class="form-control" name="picture" type="file" id="picture"
                                            value="{{ old('$product->picture') }}">
                                    </div>
                                </div>

                            </div>
                        </div>

                        <button type="submit"
                            class="btn btn-outline-primary col-12 d-flex justify-content-center">Actualizar
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-pencil-fill my-auto mx-3" viewBox="0 0 16 16">
                                <path
                                    d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                            </svg></button>
                    </form>
                    <form action="{{ route('delete-product', $product) }}" method="POST">
                        @csrf
                        @method('delete')

                        <button class="btn btn-danger bg-danger  my-2 col-12 d-flex justify-content-center"
                            type="submit">
                            <a class="d-flex text-light link-warning">Borrar Producto
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-trash3-fill my-auto mx-3" viewBox="0 0 16 16">
                                    <path
                                        d="M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z" />
                                </svg>
                            </a>
                        </button>
                    </form>


                </div>

            </div>

            <hr>

        </div>

    </x-layout-admin>
</x-layout>
