<?php
        // Supply a user id and an access token
        $userid = "1146777903";
        $accessToken = "1146777903.ab103e5.a35c9652aa7f48a596493f5704fca24e";

        // Gets our data
        function fetchData($url){
             $ch = curl_init();
             curl_setopt($ch, CURLOPT_URL, $url);
             curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
             curl_setopt($ch, CURLOPT_TIMEOUT, 20);
             $result = curl_exec($ch);
             curl_close($ch); 
             return $result;
        }

        // Pulls and parses data.
        $result = fetchData("https://api.instagram.com/v1/users/{$userid}/media/recent/?count=1&access_token={$accessToken}");
        $result = json_decode($result);
        

     foreach ($result->data as $post): ?>
        <!-- Renders images. @Options (thumbnail,low_resoulution, high_resolution) -->
        <a class="group" rel="group1" href="<?= $post->link ?>">
            <div class="text-center">
            <img class="instathumb" src="<?= $post->images->standard_resolution->url ?>"></div>
            <p><i class="fi-heart"></i> <?= $post->likes->count ?> likes <i class="fi-comment"></i> <?= $post->comments->count ?> comments</p>
        </a>
    <?php endforeach ?>