<?php

class OttWatchConfig {
    # const LOGGED_IN = 'logged_in';

    const DB_TYPE = "mysql";
    const DB_NAME = "ottwatch";
    const DB_HOST = "10.70.135.2";
    const DB_USER = "root";
    const DB_PASS = "";
    const FILE_DIR = "/var/www/YYCWatch/www";
    const WWW = "http://libdev.ucalgary.ca/YYCWatch/www";
    #
    const GOOGLE_API_KEY = "AIzaSyDO4EOUI7pHBQZHqddc8zTboP6S2uK-54Q";
    const GOOGLE_ANALYTICS = "UA-50645109-1";
    # used for read-only "sign-in-with-twitter"
    const TWITTER_CONSUMER_KEY = 'VOHFYrbRORxtt1Z3OLFphg1Xm'; // TL9zeeJmBaNNKLKJa38FCWwtz'; // API key
    const TWITTER_CONSUMER_SECRET = 'uPesfg6ZjBeZLjxtUfq2fcGGctmC0hS6sjDC3H9wMjJAxOuau9'; // A2iZRH8otMvPcx6QCndTGIzCsizJE3o39cjZzaPnKRCwpSFdTx'; // API secret
    const TWITTER_ACCESS_TOKEN = '2480287364-4DCE7ECdlfzScAAvxZlhbDPEnEEmbVEl3ubF98O'; // 50106696-ztFoDjyPznkqWrMjO8yuFCM66pO3qFw2A6DTQVxZb'; // Access token
    const TWITTER_TOKEN_SECRET = 'eOSBNcX6zDAJerjQ446EGLKicnnvHYapRGFXa4r2NbDAd'; // 0v8bjviNaF7NdVDesxrnHZRPVsI5dgL1IlOqpn6NXJqzI'; // Access token secret
    # used for read-write, just by @OttWatch to push tweets
    const TWITTER_POST_CONSUMER_KEY = 'VOHFYrbRORxtt1Z3OLFphg1Xm'; // YZ55GgJvmCkdPbYaoKsMe3Tw6';
    const TWITTER_POST_CONSUMER_SECRET = 'uPesfg6ZjBeZLjxtUfq2fcGGctmC0hS6sjDC3H9wMjJAxOuau9'; // 'ZwqXhkGFbrpMCBFiWFH8vtGysegWYVg7P6Y2IDyvG4fWo4TCLe';
    const TWITTER_POST_ACCESS_TOKEN = '2480287364-4DCE7ECdlfzScAAvxZlhbDPEnEEmbVEl3ubF98O'; // 'RGic61vq9yqHciE3AH7tqmhOQR85zxJi00aKdYK';
    const TWITTER_POST_TOKEN_SECRET = 'eOSBNcX6zDAJerjQ446EGLKicnnvHYapRGFXa4r2NbDAd'; // 'suJ288zrhkWMDNgqMFsiMx3FskCCO84BfADMg8gmJPkQz';
    #
    const YOUTUBE_USER = 'CHANGEME';
    const YOUTUBE_PASS = 'CHANGEME';
    #
    const FACEBOOK_APP_ID = '707709022620716'; // '707709022620716';
    const FACEBOOK_APP_SECRET = 'c9662fded43530ffb21e2805244ef87d'; // 'c9662fded43530ffb21e2805244ef87d';
    const FACEBOOK_PAGE_ID = '575894309090116'; // '575894309090116';
    #
    const SMTP_HOST = 'smtp.ucalgary.ca';
    const SMTP_PORT = '25';
    const SMTP_FROM_EMAIL = 'dule@ucalgary.ca';
    const SMTP_FROM_NAME = 'Dung Le';
    #
    const TMP = '/var/www/YYCWatch/tmp';
    #
    const DISQUS_KEY = 'JG8LnWYOCjdBdwbTHp91n62rxNU0naUWSpd9qzhCyv1WXO0HaeBH5m32j62gtDo8'; // API Key:
    const DISQUS_SECRET = 'wsoU5FptU7zmFwNdetTJZq8L29prSzJRaxMOAkaKPhiwaJ8JtNAZUIZXoy62mIVZ'; // API Secret:
    const DISQUS_TOKEN = '276dadf403594023a796b3bbe7fcbac9'; // Access Token:

}
