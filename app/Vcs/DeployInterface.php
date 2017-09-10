<?php
/**
 * Created by IntelliJ IDEA.
 * User: tri
 * Date: 08/09/17
 * Time: 11:15
 */

namespace App\Vcs;

interface DeployInterface
{
    function forceMerger($path);
}