<?php
    
    $app_id = '{APP-ID}';
    $app_secret = '{APP-SECRET}';

    $get_token_request = 'https://graph.facebook.com/oauth/access_token?%20client_id=' . $app_id . '&client_secret=' . $app_secret . '&%20grant_type=client_credentials';

    $access_token = file_get_contents ( $get_token_request );