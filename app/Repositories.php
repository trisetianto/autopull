<?php
/**
 * Created by IntelliJ IDEA.
 * User: tri
 * Date: 08/09/17
 * Time: 10:42
 */

namespace App;


class Repositories
{

    public function getRepositories()
    {
        return [
            [
                'name' => 'passtel-web',
                'full_name' => 'trisetianto28/passtel-web',
                'host' => 'bitbucket',
                'remote' => 'https://trisetianto28@bitbucket.org/'
                    . 'trisetianto28/passtel-web.git',
                'path' => env('BASE_PATH') . 'web/passtel-web',
            ], [
                'name' => 'passtel-api',
                'full_name' => 'trisetianto28/passtel-api',
                'host' => 'bitbucket',
                'remote' => 'https://trisetianto28@bitbucket.org/'
                    . 'trisetianto28/passtel-api.git',
                'path' => env('BASE_PATH') . 'web/passtel-api',
            ], [
                'name' => 'passtel-bot',
                'full_name' => 'trisetianto28/passtel-bot',
                'host' => 'bitbucket',
                'remote' => 'https://trisetianto28@bitbucket.org/'
                    . 'trisetianto28/passtel-bot.git',
                'path' => env('BASE_PATH') . 'web/passtel-bot',
            ]
        ];
    }

    public function getRepositoryByFullName($fullName)
    {
        foreach ($this->getRepositories() as $repository) {
            if ($repository['full_name'] === $fullName) {
                return $repository;
            }
        }
        return null;
    }

    public function getPathByFullName($fullName)
    {
        foreach ($this->getRepositories() as $repository) {
            if ($repository['full_name'] === $fullName) {
                if (!empty($repository['path'])) {
                    return $repository['path'];
                } else {
                    return null;
                }
            }
        }
        return null;
    }

}