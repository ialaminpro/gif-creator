<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: Apikey
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('Apikey', '257a4221-643a-4e33-9941-c16298e92a1d');
$apiInstance = new Swagger\Client\Api\VideoApi(
    
    
    new GuzzleHttp\Client(),
    $config
);
//$input_file = "https://www.youtube.com/watch?v=GPlUD123sAE";
$input_file = "/home/bbil/Downloads/7181405516.mp4"; // \SplFileObject | Input file to perform the operation on.
$file_url = "file_url_example"; // string | Optional; URL of a video file being used for conversion. Use this option for files larger than 2GB.
$max_width = 56; // int | Optional; Maximum width of the output video, up to the original video width. Defaults to 250 pixels, maximum is 500 pixels.
$max_height = 56; // int | Optional; Maximum height of the output video, up to the original video width. Defaults to 250 pixels, maximum is 500 pixels.
$preserve_aspect_ratio = true; // bool | Optional; If false, the original video's aspect ratio will not be preserved, allowing customization of the aspect ratio using maxWidth and maxHeight, potentially skewing the video. Default is true.
$frame_rate = 56; // int | Optional; Specify the frame rate of the output video. Defaults to 24 frames per second.
$start_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional; Specify the desired starting time of the GIF video in TimeSpan format.
$time_span = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Optional; Specify the desired length of the GIF video in TimeSpan format. Limit is 30 seconds. Default is 10 seconds.
try {
    $result = $apiInstance->videoConvertToGif($input_file, $file_url, $max_width, $max_height, $preserve_aspect_ratio, $frame_rate, $start_time, $time_span);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling VideoApi->videoConvertToGif: ', $e->getMessage(), PHP_EOL;
}
?>