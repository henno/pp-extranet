<?php namespace App;

class Deployment
{

    public static function create()
    {
        // Extract latest commit metadata
        $latest_commit_data = explode(':::', trim(exec('git log --oneline --format=%h:::%cn:::%ci:::%s -n1 HEAD')));

        // Abort if no commit data was obtained
        if (count($latest_commit_data) < 4) {
            return false;
        }

        list($sha, $author, $commit_date, $message) = $latest_commit_data;

        // Insert new deployment to database
        insert('deployments', [
            'deploymentCommitDate' => substr($commit_date, 0, 19),
            'deploymentDate' => date('Y-m-d H:i:s'),
            'deploymentCommitMessage' => $message,
            'deploymentCommitSha' => $sha,
            'deploymentCommitAuthor' => $author
        ], true);


    }
}