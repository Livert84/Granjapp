<x-layout
    title="Nueva Categoría"
    meta-description="Nueva Categoría meta description"
>
    <x-layout-admin>
        <div class="col-12 col-md-12 col-lg-12 col-xl-11 p-5 text-center">

            <h1 class="titleAdmin"><i class="fa-solid fa-circle-plus"></i> Nueva Categoría</h1>
            <x-layout-admin.form-components.errors />

            <form action="{{ route('create-category') }}" method="post">
                @csrf
                <div class="form-floating my-5">
                    <input class="form-control mt-5" type="text" name="name" id="name" placeholder="Nombre la categria"
                        value="{{ old('name') }}">
                    <label for="name">Nombre de la categoría</label>
                </div>

                <button type="submit" class="btn btn-success bg-success">Crear Categoria</button>
            </form>
        </div>
    </x-layout-admin>
</x-layout>
