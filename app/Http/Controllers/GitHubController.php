<?php

namespace App\Http\Controllers;

use App\DataTransferObjects\GitHub\NewRepoData;
use App\DataTransferObjects\GitHub\UpdateRepoData;
use App\Interfaces\GitHub;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

final class GitHubController extends Controller
{
    public function show(string $owner, string $name): View
    {
        $repo = app(GitHub::class)->getRepo($owner, $name);

        return view('repos.show')->with([
            'repo' => $repo,
        ]);
    }
    public function showLanguages(string $owner, string $name): View
    {
        $repoLanguages = app(GitHub::class)->getRepoLanguages($owner, $name);

        return view('repos.showLanguages')->with([
            'repoLanguages' => $repoLanguages,
        ]);
    }

    public function delete(string $owner, string $name): View
    {
        $repo = app(GitHub::class)->deleteRepo(
            owner: $owner,
            repoName: $name,
        );
        return view('repos.deleteRepo')->with([
            'repo' => $repo,
        ]);
    }

}