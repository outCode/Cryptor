<?php 
session_start();

function cBase64($string, $key = "Crypt0r106363djjqHANl28") {
  $result = '';
  for($i=0; $i<strlen ($string); $i++) {
    $char = substr($string, $i, 1);
    $keychar = substr($key, ($i % strlen($key))-1, 1);
    $char = chr(ord($char)+ord($keychar));
    $result.=$char;
  }

  return base64_encode($result);
}
function cSha1($str, $salt = 'bQ423hbHM8Sbdb9pjquUQU1IWxcxnybBSjqnyBJ23HjqnI3WKahxUQsxnPw813jkq', $iterations = 100000) {
        for ($x=0; $x<$iterations; $x++) {
            $str = sha1($str . $salt);
        }
        return $str;
    }
function cSha512($str, $salt = 'bQ423hbHM8Sbdb9pjquUQU1IWxcxnybBSjqnyBJ23HjqnI583KsQsxnPw813jkq', $iterations = 10000) {
        for ($x=0; $x<$iterations; $x++) {
            $str = hash('sha512', $str . $salt);
        }
        return $str;
    }
function cSnefru($str, $salt = 'bQ423hbHM8Sbdb9pjquUQU1IWxcxnybBSjqnyBJ23HjqnI583KsQsxnPw813jkq', $iterations = 10000) {
        for ($x=0; $x<$iterations; $x++) {
            $str = hash('snefru', $str . $salt);
        }
        return $str;
    }
function cSnefru256($str, $salt = 'bQ423hbHM8Sbdb9pjquUQU1IWxcxnybBSjqnyBJ23HjqnI583KsQsxnPw813jkq', $iterations = 10000) {
        for ($x=0; $x<$iterations; $x++) {
            $str = hash('snefru256', $str . $salt);
        }
        return $str;
    }
function cGost($str, $salt = 'bQ423hbHM8Sbdb9pjquUQU1IWxcxnybBSjqnyBJ23HjqnI583K194sQsxnPw813jkq', $iterations = 10000) {
        for ($x=0; $x<$iterations; $x++) {
            $str = hash('gost', $str . $salt);
        }
        return $str;
    }
function cWhirlPool($str, $salt = 'bQ423hbHM8Sbdb9pjquUQU1IWxcxnybBSjqnyBJ23HjqnI517K194sQsxnPw813jkq', $iterations = 10000) {
        for ($x=0; $x<$iterations; $x++) {
            $str = hash('whirlpool', $str . $salt);
        }
        return $str;
    }
function cRipeMD320($str, $salt = 'bQ423hbHM8Sbdb9pjquUQU1IWxcxnybBSjqnyBJ23HjqKsb17K194sQsxnPw813jkq', $iterations = 10000) {
        for ($x=0; $x<$iterations; $x++) {
            $str = hash('ripemd320', $str . $salt);
        }
        return $str;
    }
function cHaval2564($str, $salt = 'bQ423hbHM8Sbdb9pjquUQU1IWxcxnybBSjqnyBJ23HjqKsb17K184sQsxnPw813jkq', $iterations = 10000) {
        for ($x=0; $x<$iterations; $x++) {
            $str = hash('haval256,4', $str . $salt);
        }
        return $str;
    }
function cHaval2565($str, $salt = 'bQ423hbHM8Sbdb9pjquUQU1IWxcxnybBSjqnyBJ23HjqKsb17K184sQsxnPw813jkq', $iterations = 10000) {
        for ($x=0; $x<$iterations; $x++) {
            $str = hash('haval256,5', $str . $salt);
        }
        return $str;
    }
function cTiger1924($str, $salt = 'bQ423hbHM8Sbdb9pjquUQU1IWxcxnybBSjqnyBJ23HjqKsb17K184Kan104sQsxnPw813jkq', $iterations = 10001) {
        for ($x=0; $x<$iterations; $x++) {
            $str = hash('tiger192,4', $str . $salt);
        }
        return $str;
    }
function cSha256($str, $salt = 'bQ423hbHM8SbdbLaL9pjquUQU1IWxcxnybBSjqnyBJ23HjqKsb17K184Kan104sQsxnPw813jkq', $iterations = 10001) {
        for ($x=0; $x<$iterations; $x++) {
            $str = hash('sha256', $str . $salt);
        }
        return $str;
    }
    
if(!empty($_POST["text"]) || !empty($_GET["text"])){
	$text = null;
	
	if(!empty($_POST["text"])){
		$text = trim(htmlspecialchars(stripslashes($_POST["text"])));
	} else if(!empty($_GET["text"])){
		$text = trim(htmlspecialchars(stripslashes($_GET["text"])));
	}
	echo cSha256(cSnefru256(cSha512(md5(cTiger1924(cHaval2565(cHaval2564(cRipeMD320(cWhirlPool(cGost(cSnefru256(cBase64(cSnefru(md5(md5(md5(md5(md5(cSha512(cSha1(cBase64(md5(md5(md5(md5(md5(cGost($text)))))))))))))))))))))))))));
}
?>