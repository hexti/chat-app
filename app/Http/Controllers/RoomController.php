<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Predis\Client;

class RoomController extends Controller
{

    private $redis = null;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
        $remoteRedis = [
            'host'                  => 'redis',
            'port'                  => 6379,
            'read_write_timeout'    => 0
        ];

        $this->redis = new Client($remoteRedis);
    }

    public function index()
    {
        // $loop = $this->redis->pubsubloop();
        // $loop->subscribe('example');

        // foreach($loop as $messege){
        //     switch ($messege->kind) {
        //         case 'subscribe':
        //             echo 'entrei';
        //             break;
        //         default:
        //             echo '';
        //             break;
        //     }

        // }

        return view('rooms');
    }
}
