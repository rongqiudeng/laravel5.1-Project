<?php
/**
 * Created by PhpStorm.
 * User: rong
 * Date: 18-3-13
 * Time: 上午11:59
 */

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

class TranslatorController extends Controller
{
    // NOTE: Be sure to uncomment the following line in your php.ini file.
// ;extension=php_openssl.dll

// **********************************************
// *** Update or verify the following values. ***
// **********************************************

// Replace the subscriptionKey string value with your valid subscription key.
    protected $key = null;

    protected $host = "https://api.microsofttranslator.com";
    protected $path = "/V2/Http.svc/Translate";

    protected $target = "fr-fr";
    protected $text = "Hello";

//    protected $params = '?to=' . $target . '&text=' . urlencode($text);

    protected $content = '';

    function Translate($host, $path, $key, $params, $content)
    {

        $headers = "Content-type: text/xml\r\n" .
            "Ocp-Apim-Subscription-Key: $key\r\n";

        // NOTE: Use the key 'http' even if you are making an HTTPS request. See:
        // http://php.net/manual/en/function.stream-context-create.php
        $options = array(
            'http' => array(
                'header' => $headers,
                'method' => 'GET'
            )
        );
        $context = stream_context_create($options);
        $result = file_get_contents($host . $path . $params, false, $context);
        return $result;
    }

//$result = Translate ($host, $path, $key, $params, $content);
//
//echo $result;
}
