<?php

set_include_path(get_include_path() . PATH_SEPARATOR . realpath(dirname(__FILE__) . "/../lib"));
set_include_path(get_include_path() . PATH_SEPARATOR . realpath(dirname(__FILE__) . "/../www"));
require_once('include.php');

$key = OttWatchConfig::DISQUS_KEY;
$secret = OttWatchConfig::DISQUS_SECRET;
$token = OttWatchConfig::DISQUS_TOKEN;

# download most recent posts

$url = "https://disqus.com/api/3.0/forums/listPosts.json?forum=yycwatch";
$url .= "&api_key=$key";
# $url = 'https://disqus.com/api/3.0/forums/listPosts.json?forum=yycwatch&api_key=JG8LnWYOCjdBdwbTHp91n62rxNU0naUWSpd9qzhCyv1WXO0HaeBH5m32j62gtDo8';
$json = @file_get_contents($url);
if (strlen($json) == 0) {
    # exit('zero');
    return;
}
# exit($json);

$response = json_decode($json);
if ($response->code != 0) {
    print "DISQUS Api request failed\n";
    print "\n";
    print $json;
    pr($response);
    exit;
}

# save for the front end
# echo (OttWatchConfig::FILE_DIR . '/disqus/posts.json');
file_put_contents(OttWatchConfig::FILE_DIR . '/disqus/posts.json', $json);

# get thread data too
foreach ($response->response as $r) {
    $thread = $r->thread;

    if (file_exists(OttWatchConfig::FILE_DIR . "/disqus/{$thread}.json")) {
        continue;
    }

    $url = "https://disqus.com/api/3.0/threads/details.json";
    $url .= "?thread=$thread";
    $url .= "&api_key=$key";

    $json = @file_get_contents($url);
    if (strlen($json) == 0) {
        exit;
    }
    $r = json_decode($json);

    if ($r->code == 0) {
        file_put_contents(OttWatchConfig::FILE_DIR . "/disqus/{$thread}.json", $json);
    }
}