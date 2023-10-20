<?php

namespace App\Services\GitHub;

use App\Collections\GitHub\RepoCollection;
use App\DataTransferObjects\GitHub\NewRepoData;
use App\DataTransferObjects\GitHub\Repo;
use App\DataTransferObjects\GitHub\UpdateRepoData;
use App\Http\Integrations\GitHub\GitHubConnector;
use App\Http\Integrations\GitHub\Requests\CreateRepo;
use App\Http\Integrations\GitHub\Requests\DeleteRepo;
use App\Http\Integrations\GitHub\Requests\GetRepo;
use App\Http\Integrations\GitHub\Requests\GetRepoLanguages;
use App\Http\Integrations\GitHub\Requests\UpdateRepo;
use App\Interfaces\GitHub;

final class GithubService implements GitHub
{
    public function __construct(
        private string $token,
    ) {}

    private function connector(): GitHubConnector
    {
        return app(GitHubConnector::class);
    }
    public function getRepos(): RepoCollection {}
    public function getRepo(string $owner, string $repoName): Repo
    {
        return $this->connector()
            ->send(new GetRepo($owner, $repoName))
            ->dtoOrFail();
    }
    public function getRepoLanguages(string $owner, string $repoName): array
    {
        return $this->connector()
            ->send(new GetRepoLanguages($owner, $repoName))
            ->collect()
            ->keys()
            ->all();
    }


    public function deleteRepo(string $owner, string $repoName): void
    {
        $this->connector()
            ->send(new DeleteRepo($owner, $repoName));
    }

}