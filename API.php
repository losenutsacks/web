<?php
    $Auth = isset($_GET["A"]) ? $_GET["A"] : null;
    $Fetcher = isset($_GET["L"]) ? $_GET["L"] : null;
    $Count = isset($_GET["C"]) ? $_GET["C"] : 0;

    # Increase the Viewcount
    # API.php?L=2
    if (isset($Fetcher) && $Fetcher == "2") {
        file_put_contents("assets/totalrefreshes.txt", (int)file_get_contents("assets/totalrefreshes.txt") + 1);
        return die("uwu");
    };

    # Change the Viewcount, if &C=number is not included then it will reset
    # API.php?A=b2a4016adae06c90bb959f7b4f3ac5e980639b8bec27eb6c0f98eaf9ccc8f721 (&C=55)
    if (isset($Auth) || $Auth !== "b2a4016adae06c90bb959f7b4f3ac5e980639b8bec27eb6c0f98eaf9ccc8f721") {
        file_put_contents("assets/totalrefreshes.txt", $Count);
        return die("^w^");
    }
    
    return die("<!DOCTYPE html><html><head><script>window.location.href = 'https://pornhub.com/gay'</script></head></html>");
?>