<x-layout>

<div id="container_prodotti" class="container">
    <div class="row mt-5">
        <div class="col-12 text-center">
            <h2 class="my-0">Ecco alcune delle nostre tavole {{$tradeMarks}}</h2>
        </div>
    </div>
</div>
{{-- accordion non funzionante --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-2">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Accordion Item #1
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" style="">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                  </div>
                </div>
          
              </div>
        </div>
    </div>
<div class="row">
    @foreach ($prodotti as $singoloProdotto)
        <x-cards
                pippo="{{ $singoloProdotto['type'] }}"
                price="{{$singoloProdotto['price']}}"
                pluto="{{ $singoloProdotto['where'] }}"
                paperino="{{ $singoloProdotto['consigli'] }}"
                minnie="{{ route('dettagli', ['identificativo' => $singoloProdotto['id']]) }}"
        />
    @endforeach
</div>
</div>



</x-layout>

<x-footer />