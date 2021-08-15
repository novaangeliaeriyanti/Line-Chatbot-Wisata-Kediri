<?php

class Setting {
	public function getChannelAccessToken(){
		$channelAccessToken = "EhZcjXLZvrZesE+TyGcWhAvpOCVTsDUOEAWn7wK8jOMF+LJ2L4FwT+9V1H0ETFLM+3Y9q4q+1QKMBnkfJI1cQOelhXV3vMaRuRIrcx36DN4mMAKEYQI0T6kEV2osCNFVgA3BjSVTN4LSOiME3Sa1nQdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public function getChannelSecret(){
		$channelSecret = "046e8247f0213aaf55604431503593dd";
		return $channelSecret;
	}
	public function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}