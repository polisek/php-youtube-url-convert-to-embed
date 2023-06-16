function convertToEmbedURL($url) {
    $urlParts = parse_url($url);
    parse_str($urlParts['query'], $queryParts);
    if(isset($queryParts['v'])) {
        return 'https://www.youtube.com/embed/' . $queryParts['v'];
    } else {
        return $url;
    }
}

echo convertToEmbedURL("Enter URL")
