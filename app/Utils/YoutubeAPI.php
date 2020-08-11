<?php


namespace App\Utils;


use Google_Service_YouTube;

class YoutubeAPI
{
    public $client;
    public $channel = 'UC0kFUQNwtbKJlfzTfj4x4YQ';
    public $videolink = 'https://youtube.com/watch?v=';
    public function __construct()
    {

        $this->client = new Google_Client(['http_errors' => false]);
        $this->client->setApplicationName('SpiceandVybez');
        $this->client->setScopes([
            'https://www.googleapis.com/auth/youtube.readonly',
        ]);
        $this->client->setDeveloperKey('AIzaSyAxcd9GOy8uiUDE9HoM6J-5_Lce6lpnD9I');
//		TODO: For this request to work, you must replace
//       "YOUR_CLIENT_SECRET_FILE.json" with a pointer to your
//       client_secret.json file. For more information, see
//       https://cloud.google.com/iam/docs/creating-managing-service-account-keys
        //$client->setAuthConfig('YOUR_CLIENT_SECRET_FILE.json');
        $this->client->setAccessType('offline');
        // Exchange authorization code for an access token.
        /*$accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
        $client->setAccessToken($accessToken);*/
    }
    public function getChanels()
    {

        $service = new Google_Service_YouTube($this->client);

        $queryParams = [
            'id' => 'UC0kFUQNwtbKJlfzTfj4x4YQ'
        ];

        try{
            $response = $service->channels->listChannels('snippet,contentDetails,statistics', $queryParams);
        }catch (GuzzleHttp\Exception\ConnectException $e)
        {
            redirect(base_url().'connect');
        }
        catch ( \Google_Service_Exception $ge)
        {
            redirect(base_url().'connect');
        }

        $chanels = $response->getItems();
        return $chanels;
    }
    public function getChannelPlaylists($channel_id)
    {
        $service = new Google_Service_YouTube($this->client);
        $queryParams = [
            'channelId' => $channel_id,
            'maxResults' => 25
        ];

        try{
            $response = $service->playlists->listPlaylists('snippet,contentDetails', $queryParams);
        }catch (GuzzleHttp\Exception\ConnectException $e)
        {
            redirect(base_url().'connect');
        }
        $playlists = $response->getItems();
        return $playlists;
    }
    public function getPlaylistVideos($playlist_id)
    {
        $queryParams = [
            'playlistId' => $playlist_id,
            'maxResults' => 25
        ];
        $service = new Google_Service_YouTube($this->client);
        try{
            $response = $service->playlistItems->listPlaylistItems('snippet,contentDetails', $queryParams);
        }catch (GuzzleHttp\Exception\ConnectException $e)
        {
            redirect(base_url().'connect');
        }
        $playlistItems = $response->getItems();
        return $playlistItems;
    }

    public function getPlaylistDetails($playlist_id)
    {
        $queryParams = [
            'id' => $playlist_id,
            'maxResults' => 25
        ];
        $service = new Google_Service_YouTube($this->client);
        try{
            $response = $service->playlists->listPlaylists('snippet,contentDetails', $queryParams);
        }catch (GuzzleHttp\Exception\ConnectException $e)
        {
            redirect(base_url().'connect');
        }
        return $response->getItems();
    }

    public function getVideoUrl($video)
    {
        $thumbnails = $video->getSnippet()->getThumbNails();
        $count = 0;
        if(!is_null($thumbnails))
        {
            end($thumbnails);
            //get_object_vars($thumbnails);
            $resolution = key($thumbnails);
            if($resolution == "maxres")
                return $video->getSnippet()->getThumbNails()->getMaxRes()->getUrl();
            if($resolution == "standard")
                return $video->getSnippet()->getThumbNails()->getStandard()->getUrl();
            if($resolution == "high")
                return $video->getSnippet()->getThumbNails()->getHigh()->getUrl();
            if($resolution == "medium")
                return $video->getSnippet()->getThumbNails()->getMedium()->getUrl();
            if($resolution == "default")
                return $video->getSnippet()->getThumbNails()->getDefault()->getUrl();
        }

        return " ";
    }

    public function search($queryParams)
    {
        $service = new Google_Service_YouTube($this->client);
        $response = $service->search->listSearch('snippet', $queryParams);
        return ($response->getItems());
    }

}
