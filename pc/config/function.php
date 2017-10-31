<?php

if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');

/*
 *
 */
function arrayRecursive(&$array, $function, $apply_to_keys_also = false)
{
    static $recursive_counter = 0;
    if (++$recursive_counter > 1000) {
        die('possible deep recursion attack');
    }
    foreach ($array as $key => $value) {
        if (is_array($value)) {
            arrayRecursive($array[$key], $function, $apply_to_keys_also);
        } else {
            $array[$key] = $function($value);
        }

        if ($apply_to_keys_also && is_string($key)) {
            $new_key = $function($key);
            if ($new_key != $key) {
                $array[$new_key] = $array[$key];
                unset($array[$key]);
            }
        }
    }
    $recursive_counter--;
}

/*
 *
 */
function JSON($array)
{
    //arrayRecursive($array, 'urlencode', true);
    $json = json_encode($array);
    return urldecode($json);
}

/*
 *
 */
function stripslashes_array(&$array) {
    while(list($key,$var) = each($array)) {
        if ($key != 'argc' && $key != 'argv' && (strtoupper($key) != $key || ''.intval($key) == "$key")) {
            if (is_string($var)) {
                $array[$key] = stripslashes($var);
            }
            if (is_array($var))  {
                $array[$key] = stripslashes_array($var);
            }
        }
    }
    return $array;
}

/*
 *
 */
function lib_replace_end_tag($str)
{
    if (empty($str)) return false;
    $str = htmlspecialchars(trim($str));
    $str = str_replace( '/', "", $str);
    $str = str_replace("\\", "", $str);
    $str = str_replace(">", "", $str);
    $str = str_replace("<", "", $str);
    $str = str_replace("<SCRIPT>", "", $str);
    $str = str_replace("</SCRIPT>", "", $str);
    $str = str_replace("<script>", "", $str);
    $str = str_replace("</script>", "", $str);
    $str=str_replace("select","select",$str);
    $str=str_replace("join","join",$str);
    $str=str_replace("union","union",$str);
    $str=str_replace("where","where",$str);
    $str=str_replace("insert","insert",$str);
    $str=str_replace("delete","delete",$str);
    $str=str_replace("update","update",$str);
    $str=str_replace("like","like",$str);
    $str=str_replace("drop","drop",$str);
    $str=str_replace("create","create",$str);
    $str=str_replace("modify","modify",$str);
    $str=str_replace("rename","rename",$str);
    $str=str_replace("alter","alter",$str);
    $str=str_replace("cas","cast",$str);
    $str=str_replace("&","&",$str);
    $str=str_replace(">",">",$str);
    $str=str_replace("<","<",$str);
    $str=str_replace(" ",chr(32),$str);
    $str=str_replace(" ",chr(9),$str);
    $str=str_replace("    ",chr(9),$str);
    $str=str_replace("&",chr(34),$str);
    $str=str_replace("'",chr(39),$str);
    $str=str_replace("<br />",chr(13),$str);
    $str=str_replace("''","'",$str);
    $str=str_replace("css","'",$str);
    $str=str_replace("CSS","'",$str);
    return $str;
}
/*
 *
 */
function httpPost($url,$parms=null) {

    if (($ch = curl_init($url)) == false) {
        throw new Exception(sprintf("curl_init error for url %s.", $url));
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 600);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    if (is_array($parms)) {
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: multipart/form-data;'));
    }
    $postResult = @curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    if ($postResult === false || $http_code != 200 || curl_errno($ch)) {
        $error = curl_error($ch);
        curl_close($ch);
        throw new Exception("HTTP POST FAILED:$error");
    } else {
        // $postResult=str_replace("\xEF\xBB\xBF", '', $postResult);
        switch (curl_getinfo($ch, CURLINFO_CONTENT_TYPE)) {
            case 'application/json':
                $postResult = json_decode($postResult);
                break;
        }
        curl_close($ch);
        return $postResult;
    }
}
/*
 *
 */
function tranTime($time) {
    $ntime = time();
    $difftime = $ntime - $time;

    $htime = date("H:i",$time);
    $rtime = date("Y-m-d H:i",$time);
    if (date("Y",$time) == date("Y",$ntime)) {
        $rtime = date("m-d H:i",$time);
    }

    if ($difftime < 60) {
        $str = '刚刚';
    }
    elseif ($difftime < 60 * 60) {
        $min = floor($difftime/60);
        $str = $min.'分钟前';
    }
    elseif ($difftime < 60 * 60 * 24) {
        $h = floor($difftime/(60*60));
        $str = $h.'小时前 '.$htime;
    }
    elseif ($difftime < 60 * 60 * 24 * 3) {
        $d = floor($difftime/(60*60*24));
        if($d=1)
            $str = '昨天 '.$htime;
        else
            $str = '前天 '.$htime;
    }
    else {
        $str = $rtime;
    }
    return $str;
}

/*
 *
 */
function midTime($time) {
    $ntime = time();
    $difftime = $ntime - $time;

    return floor($difftime/(60*60*24));
}
/*
 *
 */
function tranURL($origURL) {
    $res = array();
    $afterURL = $origURL;

    $res['shoptype'] = 1;
    $res['shopurl'] = $afterURL;
    $res['shopprice'] = $price;

    return $res;
}

?>
