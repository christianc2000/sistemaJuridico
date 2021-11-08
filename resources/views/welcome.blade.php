<x-app-layout>
    <div class="container py-8">
       {{-- @foreach ($expedientes as $exp)--}}


            <h1 class="text-lg uppercase font-semibold text-gray-700">
                {{ $expedientes->first()->name }}
                <!--ORDENAR DE MANERA LIFO-->
            </h1>
            @livewire('expedientes', ['expediente' =>
            $expedientes->first()]){{-- primero el nombre del componente livewire y luego la variable que usaremos en ese componente --}}
        {{--@endforeach--}}
    </div>
    <script>
        new Glider(document.querySelector('.glider'), {
            slidesToScroll: 5.5,
            slidesToShow: 5,
            draggable: true,
            dots: '.dots',
            arrows: {
                prev: '.glider-prev',
                next: '.glider-next'
            }
        });
    </script>
</x-app-layout>
