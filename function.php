function convertToEmbedURL($url) {
    $urlParts = parse_url($url);
    if($urlParts['host'] == 'youtu.be') {
        // pro kratší URL youtu.be
        return 'https://www.youtube.com/embed' . $urlParts['path'];
    } else if($urlParts['host'] == 'www.youtube.com' || $urlParts['host'] == 'youtube.com') {
        // pro běžné URL www.youtube.com
        parse_str($urlParts['query'], $queryParts);
        if(isset($queryParts['v'])) {
            return 'https://www.youtube.com/embed/' . $queryParts['v'];
        }
    }
    return $url;
}

echo convertToEmbedURL("Enter URL")
