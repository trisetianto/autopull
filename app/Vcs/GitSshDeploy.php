<?php
/**
 * Created by IntelliJ IDEA.
 * User: tri
 * Date: 08/09/17
 * Time: 11:21
 */

namespace App\Vcs;


use phpseclib\Net\SSH2;

class GitSshDeploy implements DeployInterface
{
    private $ssh;

    public function __construct(SSH2 $loggedSsh)
    {
        $this->ssh = $loggedSsh;
    }

    function forceMerger($path)
    {
        $this->ssh->write("cd $path\n");
        $this->ssh->read('$');
        $this->ssh->write("git fetch --all\n");
        $this->ssh->read(".org':");
        $this->ssh->write("Timeline10\n");
        $this->ssh->read("$");
        $this->ssh->read("git reset --hard origin/master\n");
        $hasil = $this->ssh->read('$');

        return $hasil;
    }
}