<div>
    <div class="glider-contain">
        <ul class="glider">
            @foreach ($expediente->documentoJudicials as $doc)
                <li class="bg-white rounded-lg shadow {{ $loop->last ? '' : 'mr-4' }}">{{-- para hacer una pregunta con loop de un bucle --}}
                    <article>
                        <figure>
                            <img src="{{ Storage::url($doc->documentos->first()->url) }}" alt="">
                        </figure>
                        <div class="py-4 px-6">
                            <h1 class="text-lg font-semibold">
                                <a href="">
                                    {{Str::limit($doc->title),20}}
                                </a>
                            </h1>
                            <p class="font-bold text-trueGray-700">@if ($doc->status==1)
                                BORRADOR
                            @else
                                PUBLICADO
                            @endif</p>
                        </div>
                    </article>
                </li>

            @endforeach
        </ul>

        <button aria-label="Previous" class="glider-prev">«</button>
        <button aria-label="Next" class="glider-next">»</button>
        <div role="tablist" class="dots"></div>
    </div>
</div>
