<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use BotMan\BotMan\BotMan;
use BotMan\BotMan\BotManFactory;
use BotMan\BotMan\Messages\Incoming\Answer;
use BotMan\BotMan\Cache\LaravelCache;

class BotManController extends Controller
{
    public function handle()
    {
        $botman = app('botman');

        $config = [];
        $botman = BotManFactory::create($config, new LaravelCache());


        $botman->hears('{message}', function ($botman, $message) {

            if (strpos(strtoupper($message), "HOLA") !== false || strpos(strtoupper($message), "DUDA") !== false) {
                $botman->reply('Hola, ¿Cuál es tu consulta?');

            } elseif (strpos(strtoupper($message), "COSTO") !== false || strpos(strtoupper($message), "CUESTA") !== false) {
                $this->costoParticipar($botman);

            } elseif (strpos(strtoupper($message), "DONDE") !== false) {
                $this->dondeEvento($botman);

            } elseif (strpos(strtoupper($message), "CERTIFICADO") !== false) {
                $this->askCertificado($botman);

            } elseif (strpos(strtoupper($message), "MULTIMEDIA") !== false || (strpos(strtoupper($message), "MATERIAL"))) {
                $this->askMultimedia($botman);
                
            } else {
                $botman->reply('Intenta preguntandome otra cosa');
            }
        });

        $botman->listen();
    }

    /**
     * ¿Cuál es el costo para participar en el evento?
     */
    public function costoParticipar($botman)
    {
        $botman->ask('¿Quieres saber cuál es el costo para participar en el evento?', function (Answer $answer) {
            $respuesta = $answer->getText();

            if (strtoupper($respuesta) === 'SI') {
                $this->say('La inscripción es totalmente gratuita. Se desarrollará bajo modalidad virtual');
            } elseif (strtoupper($respuesta) === 'NO') {
                $this->say('Lo siento, entendí mal tu pregunta');
            } else{
                $this->say('Lo siento, no entendí tu respuesta');
            }
        });
    }


    /**
     * ¿Dónde se desarrollará el evento?
     */
    public function dondeEvento($botman)
    {
        $botman->ask('¿Quieres saber donde se desarrollará el evento?', function (Answer $answer) {
            $respuesta = $answer->getText();

            if (strtoupper($respuesta) === 'SI') {
                $this->say('Se desarrollará en los canales virtuales que daremos a conocer oportunamente');
            } elseif (strtoupper($respuesta) === 'NO') {
                $this->say('Lo siento, entendí mal tu pregunta');
            } else{
                $this->say('Lo siento, no entendí tu respuesta');
            }
        });
    }

     /**
     * ¿Se entregarán certificados físicos o virtuales?
     */
    public function askCertificado($botman)
    {
        $botman->ask('¿Quieres saber si se entregarán certificados físicos o virtuales?', function (Answer $answer) {
            $respuesta = $answer->getText();

            if (strtoupper($respuesta) === 'SI') {
                $this->say('Los certificados serán virtuales, con un valor de 50 horas');
            } elseif (strtoupper($respuesta) === 'NO') {
                $this->say('Lo siento, entendí mal tu pregunta');
            } else{
                $this->say('Lo siento, no entendí tu respuesta');
            }
        });
    }


    /**
     * ¿Se entregarán materiales multimedia sobre el desarrollo del evento?
     */
    public function askMultimedia($botman)
    {
        $botman->ask('¿Quieres saber si se entregarán materiales multimedia sobre el desarrollo del evento?', function (Answer $answer) {
            $respuesta = $answer->getText();

            if (strtoupper($respuesta) === 'SI') {
                $this->say('Sí. Una vez terminado el evento se enviará el material de las ponencias a sus respectivos correos (con los cuales se inscribieron).');
            } elseif (strtoupper($respuesta) === 'NO') {
                $this->say('Lo siento, entendí mal tu pregunta');
            } else{
                $this->say('Lo siento, no entendí tu respuesta');
            }
        });
    }
}
