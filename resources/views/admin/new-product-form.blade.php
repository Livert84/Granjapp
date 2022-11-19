<x-layout
    title="Nuevo Producto"
    meta-description="Nuevo Producto meta description"
>
    <x-layout-admin>
        <div class="col-12 col-md-12 col-lg-12 col-xl-11 p-5 text-center">

            <h1 class="titulo display-5 my-4">Crear un nuevo producto</h1>
            <x-layout-admin.form-components.errors />
            <form action="{{ route('create-product') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-floating mb-3">
                    <input class="form-control" type="text" name="name" id="name"
                        placeholder="Nombre del producto" value="{{ old('name') }}">
                    <label for="name">Nombre del producto</label>
                </div>

                <div class="row mb-3">
                    <!-- Columna izquierda -->
                    <div class="col-12 col-md-6">

                        <div class="form-floating mb-3 h-40">
                            <textarea class="form-control" style="height: 10em; resize:none" name="short_description" id="short_description"
                                placeholder="Descripción Corta">{{ old('short_description') }}</textarea>
                            <label for="short_description">Descripción Corta</label>
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text text-bg-dark bg-opacity-75">Categoría</span>
                            <select name="category_id" id="category_id" class="form-select">
                                <option class="text-center" value="">-- Selecciona una categoría --</option>
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
                                <input class="form-control" type="number" name="price" id="price" placeholder="0"
                                    min="0" step="0.01" value="{{ old('price') }}">
                                <label for="price">Precio</label>
                            </div>
                            <span class="input-group-text text-bg-dark bg-opacity-75">€</span>
                        </div>

                        <div class="input-group mb-3">
                            <div class="form-floating">
                                <input class="form-control" type="number" name="stock" id="stock" placeholder="0"
                                    min="0" value="{{ old('stock') }}">
                                <label for="stock">Stock</label>
                            </div>
                            <span class="input-group-text text-bg-dark bg-opacity-75">Unidades</span>
                        </div>
                    </div>

                    <!-- Columna derecha -->
                    <div class="col-12 col-md-6">
                        <div class="input-group my-3">
                            <span class="input-group-text text-bg-dark bg-opacity-75">
                                <i class="bi bi-image">
                                </i>
                            </span>
                            <div class="form-floating">
                                <label for="picture" class="text-center" style="background-color:rgb(12, 172, 148);">
                                    <i class="bi bi-upload text-light">
                                        Busca o arrastra una image aquí
                                    </i>
                                </label>
                                <input class="form-control" name="picture" type="file" id="picture">
                            </div>
                        </div>
                        <!--
                        <div class="mb-3">
                            <h6>Etiquetas</h6>
                            <div class="row">
                                @foreach ($tags as $tag)
                                    <div class="col-4">
                                        <div class="form-check mt-1">

                                            <label class="form-check-label" for="tag-{{ $tag->id }}">
                                                <button type="button" class="btn btn-outline-info  btn-sm">

                                                    <input class="form-button-input" type="button" name="tags[]"
                                                        value="{{ $tag->name }}" id="tag-{{ $tag->id }}">
                                                </button>
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div> -->

                    </div>
                </div>



                <button type="submit" class="btn btn-success bg-success">Crear producto</button>
            </form>

        </div>

    </x-layout-admin>
</x-layout>
