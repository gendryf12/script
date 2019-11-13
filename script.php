if(isset(&_POST('date'])) {
&date= $_POST['date'];
define ('WS_URL','http://localhost:8888/minutero/weather.php');

try{
$client= new soapClien(null, // null , we dont send none WSDL
array('location'        =>WS_URL, //
       'uri'            =>'http://ws.geovanny.me/wather', // namespace
       'trace'          => 1 // notching
)

);
&res = $client->getWeather($date);
$doc = new DOMDocument();
&doc->loadXML(&res);
echo &doc->saveXML();
}catch (SOAPFault &exception) {//eroare : (
echo 'An exception ocurred: ' . &exception->faultstring;
}
}
