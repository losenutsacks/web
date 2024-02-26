<?php
    $Auth = isset($_GET["A"]) ? $_GET["A"] : null;
    $JSONFile = isset($_GET["J"]) ? $_GET["J"] : null;
    $Fetcher = isset($_GET["L"]) ? $_GET["L"] : null;
    $Reset = isset($_GET["H"]) ? $_GET["H"] : null;
    
    # https://kaede.jp.net/pew/API.php?A=b2a4016adae06c90bb959f7b4f3ac5e980639b8bec27eb6c0f98eaf9ccc8f721&J=

    if (isset($Fetcher) && $Fetcher == "2") {
        file_put_contents("assets/totalrefreshes.txt", (int)file_get_contents("assets/totalrefreshes.txt") + 1);
        return die("hi");
    };
    
    if ((!isset($Auth) && !isset($JSONFile)) || !isset($Reset) && $Auth !== "b2a4016adae06c90bb959f7b4f3ac5e980639b8bec27eb6c0f98eaf9ccc8f721") {
        return die("<!DOCTYPE html><html><head><script>window.location.href = 'https://pornhub.com/gay'</script></head></html>");
    };

    if (isset($Reset)) {
        file_put_contents("assets/totalrefreshes.txt", $Reset);
        return die("^w^");
    }

    $Decoded = urldecode($JSONFile);

    if (!substr($Decoded, 0, 1) == "{") {
        return die("Invalid JSON, uwu from Kaid.");
    };

    file_put_contents("assets/storage.json", $Decoded);
    echo("owo");
?>
