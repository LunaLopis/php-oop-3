<?php
 require_once __DIR__.'/Models/CommunicationSystem.php';
 require_once __DIR__.'/Models/db.php';
 require_once __DIR__.'/Models/Email.php';
 require_once __DIR__.'/Models/Messages.php';
 require_once __DIR__.'/Models/Allegato.php';
 require_once __DIR__.'/Models/NotifichePush.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>OOP3</title>
</head>
<body class="bg-dark text-white">
    <div class="container ">
        <div class="row">
            <div class="col">
                <div class="content">
                <?php foreach ($CommunicationSystems as $CommunicationSystem): ?>
                        <div class="p-5 m-5 card bg-dark text-light object-fit-contain object-fit-fill border rounded">
                            <h3>Da: <?php echo $CommunicationSystem->getMittente(); ?></h3>
                            <?php if($CommunicationSystem instanceof Email){?>
                                <p> inviata da: <?php echo $CommunicationSystem->mittenteAddress; ?></p>
                            <?php }?>
                            <h4>per: <?php echo $CommunicationSystem->getDestinatario(); ?></h4>
                            <?php if($CommunicationSystem instanceof Email){?>
                                <p>per: <?php echo $CommunicationSystem->destinatarioAddress; ?></p>
                            <?php }?>
                            <p>Titolo: <?php echo $CommunicationSystem->getTitolo(); ?></p>
                            <p>Contenuto: <?php echo $CommunicationSystem->getContenuto(); ?></p>
                            <p>Invio: <?php echo $CommunicationSystem->invio(); ?></p>   
                            <p>Colore Led: <?php echo $CommunicationSystem::$coloreLed; ?></p>                      
 
                            <?php if($CommunicationSystem instanceof Email){?>
                                    <p><?php echo $CommunicationSystem->stampa(); ?></p>
                                    <p><?php echo $CommunicationSystem->inoltro(); ?></p>
                            <?php }?>
                            <!-- verifico istanza; assegno valore di getAllegato ad allegati; controllo se è vuoto -->
                                <?php if ($CommunicationSystem instanceof Email): ?>
                                <?php $allegati = $CommunicationSystem->getAllegato(); ?>
                                <?php if (!empty($allegati)): ?>
                                    <?php foreach ($allegati as $allegato): ?>
                                        <p>Nome: <?php echo $allegato->getNome(); ?></p>
                                        <p>Tipo: <?php echo $allegato->getTipo(); ?></p>
                                        <p>Dimensioni: <?php echo $allegato->getDimensione(); ?></p>
                                    <?php endforeach; ?>
                                <?php else: ?>
                                    <p>Nessun allegato presente.</p>
                                <?php endif; ?>
                            <?php endif; ?>


                            
                            <?php if ($CommunicationSystem instanceof Email): ?>
                                <?php if ($CommunicationSystem->getNotifica()) {
                                    echo 'email consegnata';
                                } else {
                                    echo 'errore consegna email';
                                } ?>
                            <?php elseif ($CommunicationSystem instanceof Messages): ?>
                                <p><?php if ($CommunicationSystem->getNotificaLettura()) {
                                        echo 'messaggio visualizzato';
                                    } else {
                                        echo 'messaggio non visualizzato';
                                    } ?></p>
                                <?php if ($CommunicationSystem->getRisposta()) {
                                    echo 'accetta risposte';
                                } else {
                                    echo 'non accetta risposte';
                                } ?></p>

                            <?php elseif ($CommunicationSystem instanceof NotifichePush): ?>                          
                                <p>OnClick: <?php echo $CommunicationSystem->OnClick(); ?></p>                          
                                <p><?php if ($CommunicationSystem->getVisibile()) {
                                        echo 'messaggio visualizzato';
                                    } else {
                                        echo 'messaggio non visualizzato';
                                    } ?></p>
                                    <p>icona: <?php echo $CommunicationSystem->geticona(); ?></p>                            
                            <?php endif; ?>
                        </div>
                  <?php endforeach; ?>               
            </div>
        </div>
    </div>
    <!-- ciclo per stampare da db -->
    
</body>
</html>
<style>

</style>