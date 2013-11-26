<?
/*
Create the XML file. Loading this page in your browser will generate a fresh XML file / update it.
*/

$file = "../xml/homes.xml";

$xml = new DOMDocument();
$xml->load($file);
$homes = $xml->getElementsByTagName('residential');
 foreach($homes as $home) {
  $home->agentID = rand(6,6);
}

//re-save
$xml->save($file);

?>