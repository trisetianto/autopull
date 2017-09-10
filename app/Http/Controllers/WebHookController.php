<?php
/**
 * Created by IntelliJ IDEA.
 * User: tri
 * Date: 05/09/17
 * Time: 2:13
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use phpseclib\Net\SSH2;

class WebHookController extends Controller
{
    public function passtelWeb(Request $request)
    {
        // Log::info(var_dump($request, true));
        Log::info(print_r($request->input('repository'),true));
        //Log::info(var_dump($request->input('push')));

        $ssh = new SSH2('10.11.5.130', '1922');

        if (!$ssh->login('admeen', 'admeen123')) {
            return response('gagal connect', 500);
        }
        $ssh->write("cd /var/www/web/passtel-web\n");
        $ssh->read('$');
        $ssh->write("git pull\n");
        $ssh->read(".org':");
        $ssh->write("Timeline10\n");
        $hasil = $ssh->read('$');

        return $hasil;
    }

    public function bitbucket(Request $request)
    {
        Log::info(print_r("actor\n" . $request->input('actor'),true));
        Log::info(print_r("repository\n" . $request->input('repository'),true));



    }
}