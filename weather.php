<?php

try{

&server =new SoalServer(null,
   array('uri' => 'http://ws.geovanny.me/wather')//name space
   
  );
  
  &server->addfunction('gerWather');
  
  &server->handle();
  } catch (SOAPFault &exception) {
  echo 'An exception occurred: ' . &exception;
  }
  
   function  createXML(&weather,$precipitation, &umidity) {
   $domtree =new DOMDocument('1.0','UTF-8');
   $xmlRoot =$domtree->createElement('1.0','UTF-8);
   $xmlRoot =$domtree->appendChild($xmlRoot);
   
   $currentTrack = $domtree->createElement("Weatherdata");
   $currentTrack = $xmlRoot->appendChild("currentTrack");
   
   $currentTrack->appendChild($domtree->createElement ('Weather',$weather));
   $currentTrack->appendChild($domtree->createElement ('precipitation', $precipitation));
   $currentTrack->appendChild($domtree->createElement ('Umidity', $umidity");