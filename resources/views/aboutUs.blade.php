<x-layout>
    <x-nav/>
    <div class="container-fluid mt-5 pt-5 ps-5">
        <div class="row min-vh-12">
            <div class="col-7">
                <h1 class="display-4 fw-bold title">La nostra azienda</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-7 px-0">
                <img src="{{ asset('media/Camion.jpeg')}}" alt="Foto Camion Autotrasporti Venturino" class="imgCostum">
            </div>
            <div class="col-5 bg">
                <div class="row">
                    <div class="col-12">
                        <h2 class="text-white mt-5 ms-5 fs-1">Chi siamo</h2>
                    </div>
                    <div class="col-12">
                        <p class="text-white pt-5 ps-5 fs-6 fw-bold">Autotrasporti Venturino Pasquale opera con dedizione nel settore dei trasporti da oltre 30 anni, offrendo servizi personalizzati e su misura per ogni esigenza logistica. La nostra azienda, con sede a Barletta, si distingue per l'affidabilità e la precisione nelle consegne, coprendo un'ampia area geografica che include Lombardia, Veneto, Piemonte, Emilia Romagna, e gran parte del Centro-Sud Italia.</p>
                        <p class="text-white ps-5 fs-6 fw-bold">Grazie a una flotta moderna, dotata di motrici con tetto apribile e centinatura amovibile, gestiamo con efficienza trasporti parziali e completi, garantendo sempre il rispetto dei termini di legge.</p>
                        <p class="text-white ps-5 fs-6 fw-bold">Oggi possiamo contare su circa 100 clienti attivi, che ci scelgono per la nostra capacità di adattarci a diverse tipologie di carichi e per la cura che mettiamo in ogni singolo trasporto.</p>
                        <p class="text-white ps-5 fs-6 fw-bold">La nostra missione è offrire soluzioni logistiche sicure e puntuali, costruendo rapporti basati sulla fiducia e sulla qualità del servizio. Affidandoci i vostri trasporti, saprete di avere un partner solido e professionale, sempre pronto a soddisfare le vostre esigenze di mobilità.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 pt-5 ps-5">
        <div class="row">
            <div class="col-7 pb-2">
                <h2 class="display-6 fw-bold title">I nostri servizi</h2>
            </div>
            <div class="col-7 pb-5">
                <h3 class="fs-3 fw-bold title">Soluzioni di spedizione su misura per il tuo business</h3>
            </div>
        </div>
    </div>
    <x-cardAboutUs/>
    <x-footer />
</x-layout>