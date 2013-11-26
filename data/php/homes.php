<?php 
$xml=simplexml_load_file($_SERVER['DOCUMENT_ROOT']."/data/xml/homes.xml");

/*
echo "<pre>";
print_r($xml);
echo "</pre>";
echo $home->headline;
*/

$latestListingsCounterA = 6;
$latestListingsCounterB = 1;
$rowCounter = 0;
foreach( $xml->{'residential'} as $home ) {
if ($rowCounter==1) return;
if ($latestListingsCounterA % 6 == 0) {
echo "<div class='row latest'> \n\n";
}
?>
<div class="col-md-2">
<a href="<?php echo $home->externalLink['href']; ?>">
<img src="<?php echo $home->images->img[0][url] ?>" alt="..." class="img-thumbnail">
<strong><?php echo $home->features->bedrooms ?>BR<br>
$<?php echo $home->price; ?><br>
<?php echo $home->address->suburb; ?></strong>
</a>
</div><!--/.col-md-2-->

<?php 
if ($latestListingsCounterB % 6 == 0) {
echo "</div><!--/.row--> \n\n";
++$rowCounter;
}
++$latestListingsCounterA;
++$latestListingsCounterB;
} //end foreach 
?> 