<?php
header('Content-Type: application/json');
	$agents = array(
		'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.7; rv:7.0.1) Gecko/20100101 Firefox/7.0.1',
		'Mozilla/5.0 (X11; U; Linux i686; en-US; rv:1.9.1.9) Gecko/20100508 SeaMonkey/2.0.4',
		'Mozilla/5.0 (Windows; U; MSIE 7.0; Windows NT 6.0; en-US)',
		'Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_7; da-dk) AppleWebKit/533.21.1 (KHTML, like Gecko) Version/5.0.5 Safari/533.21.1',
		'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.53 Safari/525.19',
		'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.36 Safari/525.19',
		'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.10 (KHTML, like Gecko) Chrome/7.0.540.0 Safari/534.10',
		'Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/534.4 (KHTML, like Gecko) Chrome/6.0.481.0 Safari/534.4',
		'Mozilla/5.0 (Macintosh; U; Intel Mac OS X; en-US) AppleWebKit/533.4 (KHTML, like Gecko) Chrome/5.0.375.86 Safari/533.4',
		'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/532.2 (KHTML, like Gecko) Chrome/4.0.223.3 Safari/532.2',
		'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/4.0.201.1 Safari/532.0',
		'Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/532.0 (KHTML, like Gecko) Chrome/3.0.195.27 Safari/532.0',
		'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/530.5 (KHTML, like Gecko) Chrome/2.0.173.1 Safari/530.5',
		'Mozilla/5.0 (Windows; U; Windows NT 5.2; en-US) AppleWebKit/534.10 (KHTML, like Gecko) Chrome/8.0.558.0 Safari/534.10',
		'Mozilla/5.0 (X11; U; Linux x86_64; en-US) AppleWebKit/540.0 (KHTML,like Gecko) Chrome/9.1.0.0 Safari/540.0',
		'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/534.14 (KHTML, like Gecko) Chrome/9.0.600.0 Safari/534.14',
		'Mozilla/5.0 (X11; U; Windows NT 6; en-US) AppleWebKit/534.12 (KHTML, like Gecko) Chrome/9.0.587.0 Safari/534.12',
		'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.13 (KHTML, like Gecko) Chrome/9.0.597.0 Safari/534.13',
		'Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US) AppleWebKit/534.16 (KHTML, like Gecko) Chrome/10.0.648.11 Safari/534.16',
		'Mozilla/5.0 (Windows; U; Windows NT 6.0; en-US) AppleWebKit/534.20 (KHTML, like Gecko) Chrome/11.0.672.2 Safari/534.20',
		'Mozilla/5.0 (Windows NT 6.0) AppleWebKit/535.1 (KHTML, like Gecko) Chrome/14.0.792.0 Safari/535.1',
		'Mozilla/5.0 (Windows NT 5.1) AppleWebKit/535.2 (KHTML, like Gecko) Chrome/15.0.872.0 Safari/535.2',
		'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/535.7 (KHTML, like Gecko) Chrome/16.0.912.36 Safari/535.7',
		'Mozilla/5.0 (Windows NT 6.0; WOW64) AppleWebKit/535.11 (KHTML, like Gecko) Chrome/17.0.963.66 Safari/535.11',
		'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_6_8) AppleWebKit/535.19 (KHTML, like Gecko) Chrome/18.0.1025.45 Safari/535.19',
		'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/535.24 (KHTML, like Gecko) Chrome/19.0.1055.1 Safari/535.24',
		'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.6 (KHTML, like Gecko) Chrome/20.0.1090.0 Safari/536.6',
		'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.1 (KHTML, like Gecko) Chrome/22.0.1207.1 Safari/537.1',
		'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.15 (KHTML, like Gecko) Chrome/24.0.1295.0 Safari/537.15',
		'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36',
		'Mozilla/5.0 (Windows NT 6.2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1467.0 Safari/537.36',
		'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/30.0.1599.101 Safari/537.36',
		'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1623.0 Safari/537.36',
		'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.116 Safari/537.36',
		'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/37.0.2062.103 Safari/537.36',
		'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.38 Safari/537.36',
		'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.71 Safari/537.36',
		'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36',
	);
	if (empty($_GET['asso'])){die();}else{$asso = $_GET['asso'];};
	if (empty($_GET['col'])){die();}else{$collecte = $_GET['col'];};
$url = 'https://www.helloasso.com/associations/'.$asso.'/collectes/'.$collecte.'';
    $ch = curl_init();
    curl_setopt ($ch, CURLOPT_URL, $url);
    curl_setopt ($ch, CURLOPT_USERAGENT, $agents[array_rand($agents)]);
    curl_setopt ($ch, CURLOPT_HEADER, 0);
    curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch,CURLOPT_CONNECTTIMEOUT,120);
    curl_setopt ($ch,CURLOPT_TIMEOUT,120);
    curl_setopt ($ch,CURLOPT_MAXREDIRS,10);
    $urlredir = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
    $output = curl_exec ($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	include 'simpledom.php';
	$html = new simple_html_dom();   
	$html->load($output);
    
	foreach($html->find('div#collecteMoney') as $e)
    $montant = $e->innertext;

    foreach($html->find('div#PageContent_ctl00_objectifAmount') as $e)
    $montant1 = $e->innertext;

	foreach($html->find('div#divTitre') as $e)
	$title = $e->plaintext;
	    if(!isset($title)){
    	$obj = new stdClass();
		$obj->label="HelloAsso - Free API provided by cottey.fr";
		$obj->data = array(
	    array('error' => 'Impossible de parser. Merci de vérifier l\'URL'));
	    $json = json_encode($obj);
		echo $json;
	    die();
    }
	foreach($html->find('div#divDescription') as $e)
	$desc = $e->innertext;
	
	foreach($html->find('div#nbDonateurs') as $e)
	$donnateurs = $e->plaintext;
	
	foreach($html->find('span#PageContent_ctl00_nbJoursRestants') as $e)
	$jours_restant = $e->plaintext;
	
	foreach($html->find('h2.title') as $e)
	$par = $e->plaintext;
	
	
	
	$montant = str_replace(' ', '', $montant);
	$montant = str_replace('€', '', $montant);
	$montant1 = str_replace(' ', '', $montant1);
	$montant1 = str_replace('€', '', $montant1);
	$montant1 = str_replace('sur', '', $montant1);
	$montant1 = str_replace('&nbsp;', '', $montant1);
	$donnateurs = str_replace(' ', '', $donnateurs);
	$jours_restant = str_replace(' ', '', $jours_restant);
	$par = str_replace('par ', '', $par);
	function Pourcentage($Nombre, $Total) {
		return $Nombre * 100 / $Total;
	}
	$Pourcent =  Pourcentage($montant, $montant1);
	$obj = new stdClass();
	$obj->label="HelloAsso - Free API provided by cottey.fr";
	$obj->data = array(
	    array('montant_collecte' => str_replace(chr( 194 ) . chr( 160 ), '', $montant),
	    'montant_demande' => str_replace(chr( 194 ) . chr( 160 ), '', $montant1),
	    'titre' => $title,
	    'desc' => $desc,
	    'donnateurs' => $donnateurs,
	    'jours_restant' => $jours_restant, 
	    'par' => $par,
	    'pourcent' => str_replace(chr( 194 ) . chr( 160 ), '', $montant) * 100 / str_replace(chr( 194 ) . chr( 160 ), '', $montant1),
	    'disclaimer' => 'Toutes les données sont distribué gratuitement, et sont extraites des pages du sites HelloAsso via un DOM Parser',
	    'copyright' => 'Donnée de <a href="https://www.helloasso.com">HelloAsso</a>',
	    '_comment' => 'La partie copyright n\'est pas obligatoire mais permet de faire connaitre le projet.',
	    'github_url' => 'https://github.com/baptcottey/helloasso_api',
	    'httpcode' => $httpcode)
	);
	
	$json = json_encode($obj);
	echo $json;


?>