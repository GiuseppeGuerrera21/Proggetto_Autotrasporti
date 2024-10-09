<x-layout>
    <x-nav/>
    <div class="container-fluid cntCs py-5 ">
        <div class="row">
            <div class="col-5">       
                <form action="{{route('contact.send')}}" method="POST">
                    @csrf
                    <label for="tipo-trasporto">Tipo di trasporto:*</label>
                    <input type="text" id="tipo-trasporto" name="tipo-trasporto" required>
                    <h3>Da:</h3>
                    <label for="citta-partenza">Città:*</label>
                    <input type="text" id="citta-partenza" name="citta-partenza" required>
                    <label for="regione-partenza">Regione:*</label>
                    <input type="text" id="regione-partenza" name="regione-partenza" required>
                    <h3>Destinazione:</h3>
                    <label for="citta-destinazione">Città:*</label>
                    <input type="text" id="citta-destinazione" name="citta-destinazione" required>
                    <label for="regione-destinazione">Regione:*</label>
                    <input type="text" id="regione-destinazione" name="regione-destinazione" required>
                    <label for="data-consegna">Data richiesta di consegna:</label>
                    <input type="date" id="data-consegna" name="data-consegna">
                    <h3>Informazioni Carico:</h3>
                    <label for="descrizione-carico">Gentilmente descrivete il vostro carico:</label>
                    <textarea id="descrizione-carico" name="descrizione-carico" rows="4"></textarea>
                    <h3 class="mb-3">Servizi aggiuntivi richiesti:</h3>
                    <label><input type="checkbox" id="assicurazione-carico" name="assicurazione-carico"> Assicurazione carico</label>
                    <label><input type="checkbox" id="merci-infiammabili" name="merci-infiammabili"> Merci infiammabili</label>
                    <h3>Informazioni di contatto:</h3>
                    <label for="email">Email:*</label>
                    <input type="email" id="email" name="email" required>
                    <label for="telefono">Telefono:*</label>
                    <input type="tel" id="telefono" name="telefono" required>
                    <button class="btnColor fw-bold buttonContact" type="submit">Invia Richiesta</button>
                </form>
            </div>
        </div>
    </div>
    <x-footer />
</x-layout>