<?php

namespace App\Realtime;

use Thruway\Peer\Client;
use React\ZMQ\SocketWrapper;
use React\EventLoop\LoopInterface;

class Pusher extends Client
{

    /**
     * @var \React\ZMQ\SocketWrapper
     */
    protected $socket;

    public function __construct($realm, LoopInterface $loop, SocketWrapper $socket)
    {
        parent::__construct($realm, $loop);
        $this->socket = $socket;
    }

    public function onSessionStart($session, $transport)
    {
        $this->socket->on('message', [$this,'transmit']);
    }

    public function transmit($payload)
    {
        dump($payload);
    }
}
