<x-layout>
    <x-nav/>
    {{-- SECTION 1 w/Hns  --}}
    <div class="container-fluid mt-5 pt-5">
        <div class="row mb-2 min-vh-12">
            <div class="col-12 col-md-7 ps-5 align-self-end">
                <h2 class="fw-bold display-4 title">Serviamo clienti in tutta Italia</h2>
            </div>
            <div class="col-12 col-md-5 text-end align-self-end mt-5 pe-5">
                <h4 class="fw-bold">Trasporti sicuri e consegne puntuali.</h4>
            </div>       
        </div>
    </div>  


    {{-- SECTION 2 w/VIDEO  --}}
    <div class="container-fluid position-relative">
    <div class="container-fluid position-relative px-0">
        <video class="video" autoplay loop src="{{ asset('media/Video for web.mp4') }}" type="video/mp4">Il tuo browser non supporta il video.</video>
        <button class="border-0 text-white fw-bold btnColor position-absolute p-2 top-0 end-0 mt-5 me-5">RICHIEDI UN PREVENTIVO <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="customSize">
            <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" /></svg></span>
        <button class="border-0 text-white fw-bold btnColor position-absolute p-2 top-0 end-0 mt-5 me-5">RICHIEDI UN PREVENTIVO <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="customSize">
            <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" /></svg>
        </button>
    </div>
    
    {{-- SECTION 3 w/ABOUT US  --}}
    <div class="container-fluid my-5 pe-5">
        <div class="row d-flex justify-content-between">
            <div class="col-6 d-flex flex-column justify-content-center gap-2 align-items-center">
                <div class="col-8">
                    <div class="border border-dark mb-3">
                        <p class="display-6 p-3">Trasportiamo con efficienza ogni carico</p>
                    </div>
                </div>
                <div class="col-8">
                    <div class="border border-dark mb-3 p-3">
                        <p class="fw-bold">
                            Autotrasporti Venturino Pasquale opera con passione e dedizione nel settore dei trasporti da oltre 30 anni. Grazie alla nostra esperienza consolidata, garantiamo consegne puntuali e un servizio affidabile. La nostra mission è la soddisfazione del cliente, costruita sulla fiducia e sull'impegno costante.
                        </p>
                    </div>
                </div>
                <div class="col-8 ps-3">
                    <div class="row">
                        <div class="col-7 bgBtn border border-dark">
                        </div>
                        <div class="col-5 ps-0">
                            <button class="border-0 text-white fw-bold btnColor w-100 p-3">CHI SIAMO <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="customSize">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" /></svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="col-12">
                    <div>
                        
                        <img src="media\dafTruck.jpg" alt="Truck Image" class="customPic">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    {{-- SECTION 4 w/Cards  --}}
    <div class="container-fluid mt-5 p-5">
        <div class="row">
            <div class="col-12 col-md-5">
                <h2 class="fs-1 title fw-bold">Come viaggia la tua merce, step by step</h2>
            </div>
        </div>
    </div>
    <div class="container mb-5">
        <x-card/>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="ms-0 text-end">
                    <button class="border-0 text-white fw-bold btnColor p-2">RICHIEDI UN PREVENTIVO <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="customSize">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" /></svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
    
    {{-- SECTION 5 w/Stats  --}}
    <div class="container-fluid my-5 ps-5 pt-5">
        <div class="row">
            <div class="col-12 col-md-5">
                <h2 class="fs-1 title">I nostri numeri</h2>
            </div>
        </div>
    </div>
    <div class="container px-5 mb-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 px-0">
                <img src="{{ asset('media/truckNumbers.jpg')}}" alt="Truck Picture" class="">
            </div>
            <div class="col-12 col-md-6 pe-5">
                <x-stat/>
            </div>
        </div>
    </div>
    
    {{-- SECTION 6 w/Feedbacks  --}}
    <div class="container p-0 mx-0">
        <div class="row feedContainer">
            <div class="col-12 ms-5 my-5">
                <h2 class="display-6 fw-bold title mb-5">Cosa dicono di noi</h2>
                <div class="col-5 bg-white carouselHeight border border-dark p-3">
                    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="d-block w-100 mb-3">"Siamo estremamente soddisfatti del servizio offerto da Autotrasporti Venturino Pasquale. La loro capacità di gestire le richieste con efficienza e tempestività ci consente di mantenere le operazioni fluide e senza ritardi. La professionalità e l'affidabilità dimostrate in ogni consegna rendono questa collaborazione davvero preziosa."</div>
                                <h5 class="fw-bold">Massimo - Sanigen S.r.l.</h5>
                            </div>
                            <div class="carousel-item">
                                <div class="d-block w-100 mb-3">"Autotrasporti Venturino Pasquale si è dimostrato un partner affidabile e puntuale. Grazie alla loro professionalità e capacità di gestire consegne tempestive, possiamo sempre contare su un servizio efficiente e impeccabile. La flessibilità e l'attenzione alle nostre esigenze rendono la collaborazione con loro un vero valore aggiunto."</div>
                                <h5 class="fw-bold">Vincenzo - Sadun S.r.l.</h5>
                            </div>
                            <div class="carousel-item">
                                <div class="d-block w-100 mb-3">"Autotrasporti Venturino Pasquale si distingue per la sua efficienza e cura nella gestione dei nostri trasporti. La puntualità e l'attenzione alla sicurezza delle merci sono sempre garantite, permettendoci di operare senza preoccupazioni. Un partner su cui possiamo fare affidamento per ogni nostra esigenza logistica."</div>
                                <h5 class="fw-bold">Massimo - C.F.B. S.p.A.</h5>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
    {{-- SECTION 6 w/Question  --}}
    <div class="container-fluid mt-5">
        <div class="row min-vh-25">
            <div class="col-12">
                <h2 class="display-6 mb-4">Vorresti ampliare la tua area di consegna a tutto il territorio nazionale?</h2>
                <button class="border-0 text-white p-2 fw-bold btnColor">RICHIEDI UN PREVENTIVO <span><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="customSize">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m5.25 4.5 7.5 7.5-7.5 7.5m6-15 7.5 7.5-7.5 7.5" /></svg></span>
                </button>
            </div>
        </div>
    </div>
    
    <x-footer/>
    
</x-layout>