<?php

]
function login($url,$data){
    $fp = fopen("cookie.txt", "w");
    fclose($fp);
    $login = curl_init();
    curl_setopt($login, CURLOPT_COOKIEJAR, "cookie.txt");
    curl_setopt($login, CURLOPT_COOKIEFILE, "cookie.txt");
    curl_setopt($login, CURLOPT_TIMEOUT, 40000);
    curl_setopt($login, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($login, CURLOPT_URL, $url);
    curl_setopt($login, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($login, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($login, CURLOPT_POST, TRUE);
    curl_setopt($login, CURLOPT_POSTFIELDS, $data);
    ob_start();
    return curl_exec ($login);
    ob_end_clean();
    curl_close ($login);
    unset($login);    
};             
 
function grab_page($site, $useragent){
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_TIMEOUT, 40);
    curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
    curl_setopt($ch, CURLOPT_URL, $site);
    ob_start();
    return curl_exec ($ch);
    ob_end_clean();
    curl_close ($ch);
};
 
function post_data($site,$data){
    $datapost = curl_init();
        $headers = array("Expect:");
    curl_setopt($datapost, CURLOPT_URL, $site);
        curl_setopt($datapost, CURLOPT_TIMEOUT, 40000);
    curl_setopt($datapost, CURLOPT_HEADER, TRUE);
        curl_setopt($datapost, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($datapost, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($datapost, CURLOPT_POST, TRUE);
    curl_setopt($datapost, CURLOPT_POSTFIELDS, $data);
        curl_setopt($datapost, CURLOPT_COOKIEFILE, "cookie.txt");
    ob_start();
    return curl_exec ($datapost);
    ob_end_clean();
    curl_close ($datapost);
    unset($datapost);    
};


if(isset($_POST["submit"])){
    $url = $_POST["website"];
    $useragent = $_POST["user"];
    echo grab_page($url, $useragent);
}

?>



<script type="text/javascript" src="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<div style="margin-top: 50px;" class="row">
    <div class="col-sm-6 col-sm-offset-3">
        <form action="" method="post">
            <div class="form-group">
                <input type="website" name="website" class="form-control" placeholder="Saytı Daxil Et">
            </div>
            <div class="form-group">
                <select name="user" class="form-control">
                    <option value="Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 (.NET CLR 3.5.30729) (Prevx 3.0.5)">User 1</option>
                    <option value="Mozilla/5.0 (Windows; U; Windows NT 5.1; de; rv:1.9.2.3) Gecko/20100401 Firefox/3.6.3 (FM Scene 4.6.1)">User 2</option>
                    <option value="Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0; .NET CLR 1.1.4322; 2345Explorer 5.0.0.14136)">User 3</option>
                    <option value="Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.17 (KHTML, like Gecko) Chrome/24.0.1312.57 Safari/537.17 QIHU 360EE">User 4</option>
                    <option value="Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; JyxoToolbar1.0; http://www.Abolimba.de; .NET CLR 2.0.50727; .NET CLR 3.0.04506.648; .NET CLR 3.5.21022; .NET CLR 1.1.4322)">User 5</option>
                    <option value="Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.1; Trident/5.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; 360SE)">User 6</option>
                    <option value="Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.106 Safari/537.36 ASW/1.51.2220.53">User 7</option>
                    <option value="Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) WhiteHat Aviator/33.0.1750.117 Chrome/33.0.1750.117 Safari/537.36">User 8</option>
                    <option value="Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/55.0.2883.87 Safari/537.36 AviraScout/16.11.2883.2017">User 9</option>
                    <option value="Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.12) Gecko/20101026 Villanova/1.9.2.12 Polarity/3.0.0 Firefox/4.0">User 10</option>
                </select>
            </div>
            <div class="form-group">
                <input class="btn btn-primary" type="submit" name="submit" class="form-control" value="Botu Göndər">
            </div>
          </div>
        </form>
    </div>
</div>





<script type="text/javascript" src="app.js">
    
    
</script>
