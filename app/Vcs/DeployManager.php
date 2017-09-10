<?php
/**
 * Created by IntelliJ IDEA.
 * User: tri
 * Date: 08/09/17
 * Time: 11:47
 */

namespace App\Vcs;


use App\Repositories;
use phpseclib\Net\SSH2;

class DeployManager
{
    public function deploy($fullName)
    {
        $ssh = new SSH2('10.11.5.130', '1922');

        if (!$ssh->login('admeen', 'admeen123')) {
            return response('gagal connect', 500);
        }

        $deploy = new GitSshDeploy($ssh);

        $repositories = new Repositories();
        $path = $repositories->getPathByFullName($fullName);

        return $deploy->forceMerger($path);
    }
}