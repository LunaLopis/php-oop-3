<?php
require_once __DIR__.'/Email.php';
require_once __DIR__.'/Messages.php';
require_once __DIR__.'/Allegato.php';
require_once __DIR__.'/NotifichePush.php';
$allegati = [
    new allegato("immagine", "jpg", "340x280"),
    new allegato("image2", "jpg", "340x280"),
];
$CommunicationSystems = [
    new CommunicationSystem("john doe", "john doe", "Richiesta di informazioni", "Potresti gentilmente fornirmi il numero di ordine corrispondente all'acquisto effettuato il 10 luglio 2023? Ho bisogno di questo numero per riferimenti futuri e per eventuali richieste di assistenza."),
    new CommunicationSystem("sara hadams", " mark johnson", "Invito alla conferenza", "Conferenza internazionale sulle nuove tecnologie", "Spero che tu stia bene. Mi rivolgo a te per invitarti a partecipare alla Conferenza Internazionale sulle Nuove Tecnologie che si terrà dal 15 al 17 agosto 2023 presso il centro congressi XYZ a San Francisco."),
    
    new Email("John Doe", "John Doe", "Richiesta di informazioni", "Potresti gentilmente fornirmi il numero di ordine corrispondente all'acquisto effettuato il 10 luglio 2023? Ho bisogno di questo numero per riferimenti futuri e per eventuali richieste di assistenza.", 
    true,"johndoe@email.com", "johndoe@email.com",[] ),
    new Email("alice johnson", "Marco Rossi", "Invito alla conferenza sulle tecnologie innovative","Spero che tu stia bene. Sto scrivendo per invitarti alla nostra conferenza sulle tecnologie innovative che si terrà il prossimo mese. L'evento avrà luogo presso il centro congressi della nostra città e sarà un'ottima occasione per scoprire le ultime tendenze nel campo della tecnologia e connetterti con esperti del settore.",
    false,"alice.johnson@email.com", "marco.rossi@email.com", []),
    new Email("John Doe", "John Doe", "Richiesta di informazioni", "Potresti gentilmente fornirmi il numero di ordine corrispondente all'acquisto effettuato il 10 luglio 2023? Ho bisogno di questo numero per riferimenti futuri e per eventuali richieste di assistenza.", 
    true,"johndoe@email.com", "johndoe@email.com", [$allegati[0]]),
    new Email("alice johnson", "Marco Rossi", "Invito alla conferenza sulle tecnologie innovative","Spero che tu stia bene. Sto scrivendo per invitarti alla nostra conferenza sulle tecnologie innovative che si terrà il prossimo mese. L'evento avrà luogo presso il centro congressi della nostra città e sarà un'ottima occasione per scoprire le ultime tendenze nel campo della tecnologia e connetterti con esperti del settore.",
    false,"alice.johnson@email.com", "marco.rossi@email.com", [$allegati[1]]),

    new Messages("john doe", "john doe", "nuovo messaggio", "ciao come stai?", true, false),
    new Messages("john doe", "john doe", "nuovo messaggio ", "ti invito alla conferenza sulle tecnologie innovative", false, true),

    new NotifichePush("john doe", "john doe", "Nuova notifica", "notifica", true, "icona"),
    new NotifichePush("alice Johnson", "john doe", "Nuova notifica ", "notifica", false, "icona"),
];

?>