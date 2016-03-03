<?php
// ->Alpix
// 03.03.16
class resolver {
	function resolveuuidshort($username) {
		if (!$username){
			$username="AlpixYT";
		}
		$url = "https://api.mojang.com/users/profiles/minecraft/" . urlencode($username);
		$content = file_get_contents($url); 
		$json = json_decode($content,true);
		return $json['id'];
	}
	function resolveuuidlong($username) {
		if (!$username){
			$username="AlpixYT";
		}
		$url = "https://api.mojang.com/users/profiles/minecraft/" . urlencode($username);
		$content = file_get_contents($url);
		$json = json_decode($content,true);
		$uuid=$json['id'];
		$longuuid = substr($uuid,0,8).'-'.substr($uuid,8,4).'-'.substr($uuid,12,4).'-'.substr($uuid,16,4).'-'.substr($uuid,20,12);
		return $longuuid;
		
	}
}
?>
//example
<?php
$resolver=new resolver();
$uuid=$resolver->resolveuuidlong("AlpixYT");
echo $uuid;
$uuid=$resolver->resolveuuidshort("AlpixYT");
echo $uuid;
?>
