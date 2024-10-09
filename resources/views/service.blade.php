<x-layout>
    <x-nav/>
    <div class="container-fluid mt-5 pt-5 ps-5">
        <div class="row">
            <div class="col-7">
                <h1 class="display-4 fw-bold title">Aree servite</h1>
            </div>
            <div class="col-7">
                <h3 class="fw-bold title">Resta aggiornato sulle aree coperte dai nostri servizi.</h3>
            </div>
        </div>
    </div>
    <div class="container-fluid my-5 py-5 ">
        <div class="row">
            <div class="col-6">
                <img class="imgCostum" src="{{ asset('media/MapChart_Map (1).png')}}" alt="">
            </div>
            <div class="col-6 bg">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-white pt-5 ps-5 mt-5 ms-5 fs-1">Località servite</h2>
                    </div>
                    <div class="col-12">
                        <p class="text-white pt-5 ps-5 fs-4">Effettuiamo trasporti nelle regioni di seguito indicate, come visibile anche nella mappa di fianco:</p>
                    </div>
                    <div class="col-12">
                        <div>
                            <ul class="list-square">
                                <li class="customLi">Piemonte</li>
                                <li class="customLi">Lombardia</li>
                                <li class="customLi">Veneto</li>
                                <li class="customLi">Friuli-Venezia-Giulia</li>
                                <li class="customLi">Emilia-Romagna</li>
                                <li class="customLi">Marche</li>
                                <li class="customLi">Lazio</li>
                                <li class="customLi">Abruzzo</li>
                                <li class="customLi">Molise</li>
                                <li class="customLi">Campania</li>
                                <li class="customLi">Puglia</li>
                                <li class="customLi">Basilicata</li>
                            </ul>
                        </div>
                    </div>
                    <div>
                        <button class="border-0 fw-bold fs-4 btnCustomServ p-1">Richiedi Preventivo <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="customSize">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" /></svg></button>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    <x-footer />
</x-layout>