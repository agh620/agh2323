<?php 

/*
Hi
Developersall adminstoall official
@HardBoy_021
#SudoHardBoy
Programmer
 < Munir > @wonds1
~~~~~~~~~~~~
Aides developer
« Mohammed » @vps_1
 « zahrra » @devzahraa
Channel = @super_api
*/
ob_start();
$API_KEY = '367578574:AAEsdZuGqUR87wfg4de7CCK462zYcMPBq2s'; //add your bot token
$bot_ = "apilinkrembot";
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
 function sendmessage($chat_id, $text, $model){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>$text,
 'parse_mode'=>$mode
 ]);
 }
 function sendphoto($chat_id, $photo, $captionl){
 bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>$photo,
 'caption'=>$caption,
 ]);
 }
 function sendsticker($chat_id, $photo, $captionl){
 bot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>$photo,
 'caption'=>$caption,
 ]);
 }
 function sendaudio($chat_id, $audio, $caption){
 bot('sendaudio',[
 'chat_id'=>$chat_id,
 'audio'=>$audio,
 'caption'=>$caption,
 ]);
 }
 function sendvoice($chat_id, $voice, $caption){
 bot('sendvoice',[
 'chat_id'=>$chat_id,
 'voice'=>$voice,
 'caption'=>$caption,
 ]);
 }

 function sendaction($chat_id, $action){
 bot('sendchataction',[
 'chat_id'=>$chat_id,
 'action'=>$action
 ]);
 }
	
	function save($filename,$TXTdata)
	{
	$myfile = fopen("data/".$filename, "w") or die("Unable to open file!");
	fwrite($myfile, "$TXTdata");
	fclose($myfile);
	}
 //====================the file by mounir======================//

$update = json_decode(file_get_contents('php://input'));
var_dump($update);
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$textid = $message->text->id;
$text = $message->text;
$textmessage = isset($update->message->text)?$update->message->text:'';
$myphoto = $update->message->file_size;
$edit = $update->message->edited_channel_post;
$new_gp_name = $update->message->new_chat_title;
$new_gp_photo = $update->message->new_chat_photo;
$admin = 263679888;
$del_gp_photo = $update->message->delete_chat_photo;
$new_member = $update->message->new_chat_member;
$left = $update->message->left_chat_member;
$test = $update->message->contact;
$audio = $update->message->audio;
$location = $update->message->location;
$memb = $update->message->message_id;
$game = $update->message->game; 
$name = $update->message->from->first_name;
$gp_name = $update->message->chat->title;
$user = $update->message->from->username;
$for = $update->message->from->id;
$sticker = $update->message->sticker;
$video = $update->message->video;
$photo = $update->message->photo;
$voice = $update->message->voice;
$doc = $update->message->document;
$fwd = $update->message->forward_from;
$fwd_id = $update->message->forward_from->id;
$fwd_to = $update->message->forward_to;
$fwd_user = $update->message->forward_from->username;
$fwd_name = $update->message->forward_from->first_name;
$pin = $update->message->pinned_message;
$re = $update->message->reply_to_message;
$re_id = $update->message->reply_to_message->from->id;
$re_user = $update->message->reply_to_message->from->username;
$user_id = $update->message->from->id;
$re_name = $update->message->reply_to_message->from->first_name;
$re_msgid = $update->message->reply_to_message->message_id;
$re_chatid = $update->message->reply_to_message->chat->id;
$re_fwdid = $update->message->reply_to_message->forward_from->id;
$message_id = $update->message->message_id;
$type = $update->message->chat->type;

$cllchatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$cllmsegid = $update->callback_query->message->message_id;
$cllfor = $update->callback_query->from->id;

$gplink = file_get_contents("data/$chat_id/gplink.txt");
$getruels = file_get_contents("data/$chat_id/rules.txt");
$getwelcome = file_get_contents("data/$chat_id/welcome.txt");
$photo1 = file_get_contents("data/$chat_id/photo.txt");
$sticker1 = file_get_contents("data/$chat_id/sticker.txt");
$pin1 = file_get_contents("data/$chat_id/pin.txt");
$doc1 = file_get_contents("data/$chat_id/doc.txt");
$game1 = file_get_contents("data/$chat_id/game.txt");
$fwd1 = file_get_contents("data/$chat_id/fwd.txt");
$voice1 = file_get_contents("data/$chat_id/voice.txt");
$link1 = file_get_contents("data/$chat_id/link.txt");
$audio1 = file_get_contents("data/$chat_id/audio.txt");
$video1 = file_get_contents("data/$chat_id/video.txt");
$text1 = file_get_contents("data/$chat_id/text.txt");
$tag1 = file_get_contents("data/$chat_id/tag.txt");

$photo12 = file_get_contents("data/$cllchatid/photo.txt");
$sticker12 = file_get_contents("data/$cllchatid/sticker.txt");
$pin12 = file_get_contents("data/$cllchatid/pin.txt");
$doc12 = file_get_contents("data/$cllchatid/doc.txt");
$game12 = file_get_contents("data/$cllchatid/game.txt");
$fwd12 = file_get_contents("data/$cllchatid/fwd.txt");
$voice12 = file_get_contents("data/$cllchatid/voice.txt");
$link12 = file_get_contents("data/$cllchatid/link.txt");
$audio12 = file_get_contents("data/$cllchatid/audio.txt");
$video12 = file_get_contents("data/$cllchatid/video.txt");
$text12 = file_get_contents("data/$cllchatid/text.txt");
$tag12 = file_get_contents("data/$cllchatid/tag.txt");

$warn = file_get_contents("data/$chat_id/warn/warn.txt");
$warn_ = file_get_contents("data/$cllchatid/warn/warn.txt");
$warn_2 = file_get_contents("data/$chat_id/warn/$re_id.txt");
$warn_3 = file_get_contents("data/$chat_id/warn/$re_id.txt");


$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
$you_ = $info['result']['user']['id'];

$get_ = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$cllchatid&user_id=".$cllfor);
$info_ = json_decode($get_, true);
$you_ = $info_['result']['status'];
//====================the file by mounir======================//
if($text == '/start'){
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"به این ربات خوش امدید با این ربات میتوانید از گروه خود در مقابل 
 لینک + استیکر + فایل +عکس و .. محافظت کنید 
 این ربات ای پی هست و درحا لینک ویا هرچی را که قفل کنید پاک می کند :-)
 فقط کافی است ربا را به گروه برده و دستور را بزنید. /add ✨➖
        🐾➖➖➖➖➖🐾
Welcome Sir ، 
You can above this bot security 🚨 your Group
It Delete All Links + Photo + Stickers + Fwds , 💡
iam robot api save link you all lock remeov ok:-)
Just add a bot to group , up a mod and send it /add ✨➖
ENJOY ⚗️🔱", 
    'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
		['text'=>"⚛ more «~» بیشتر ⚛",'callback_data'=>"start"]
	  ]
	 
		]
		])
  ]);
}

if($data == 'start'){
  	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>"خدماتی که میتواند به شما کمک کند را  💡
از لیست زیر انتخاب نمایید 👁‍🗨

          🐾➖➖➖➖➖🐾
Some Orders help you 💡
Select would you want 👁‍🗨",
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	  [
	  	['text'=>"🇮فارسی",'callback_data'=>"super_"]
 	  ],
 	  [
     ['text'=>"اضافه کردن من به گروه ♣️", 'url'=>"https://telegram.me/$bot_?startgroup=start"]
     ],
    	[
     ['text'=>"😎سازنده", 'url'=>"t.me/hardboy_021"]
     ],
	   [
  		['text'=>"🇦🇺 English 🇦🇺",'callback_data'=>"super_"]
 	  ],
	   [
    ['text'=>"کانال ما📢️️", 'url'=>"https://telegram.me/four4team"]
    ],
     [
     ['text'=>"🗣ربات پشتیبانی", 'url'=>"t.me/mrpvbot"]
     ],
    ]
    ])
    ]);
    }
 if($photo  && $you != "creator" && $you != "administrator" && !$fwd && $type == "supergroup" && $photo1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($voice   && $you != "creator" && $you != "administrator" && !$fwd && $type == "supergroup" && $voice1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($audio   && $you != "creator" && $you != "administrator" && !$fwd && $type == "supergroup" && $audio1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($video   && $you != "creator" && $you != "administrator" && !$fwd && $type == "supergroup" && $video1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
 if( !$fwd && $type == "supergroup" && $link1 == "❌" && $you != "creator" && $you != "administrator" ){
 if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} }
 if( !$fwd && $type == "supergroup" && $tag1 == "❌" && $you != "creator" && $you != "administrator" ){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)  ){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
} }
if($doc   && $you != "creator" && $you != "administrator" && !$fwd && $type == "supergroup" && $doc1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($game   && $you != "creator" && $you != "administrator" && !$fwd && $type == "supergroup" && $game1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($sticker   && $you != "creator" && $you != "administrator" && !$fwd && $type == "supergroup" && $sticker1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
elseif($update->message->forward_from && $you != "creator" && $you != "administrator" ){
if( $fwd1 == "❌"){
	bot('deleteMessage',[
 'chat_id'=>$chat_id,
'message_id'=>$message->message_id
   ]);
	}
	}
if($text   && $you != "creator" && $you != "administrator" && $type == "supergroup" && $text1 == "❌"){
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
]);
}
if($you == "creator" or $you == "administrator") {
if($re  &&  $text == "/del" ){
bot('deleteMessage',[
'chat_id'=>$re_chatid,
'message_id'=>$re_msgid
]);
}
}

//########
/////////////////########

if($you == "creator" or $you == "administrator") {
if($text == "/add"){
    mkdir("data");
    mkdir("data/$chat_id");
    file_put_contents("data/$chat_id/game.txt","❌");
    file_put_contents("data/$chat_id/tag.txt","❌");
    file_put_contents("data/$chat_id/photo.txt","❌");
    file_put_contents("data/$chat_id/fwd.txt","❌");
    file_put_contents("data/$chat_id/sticker.txt","❌");
    file_put_contents("data/$chat_id/pin.txt","❌");
    file_put_contents("data/$chat_id/doc.txt","❌");
    file_put_contents("data/$chat_id/link.txt","❌");
    file_put_contents("data/$chat_id/video.txt","❌");
    file_put_contents("data/$chat_id/audio.txt","❌");
    file_put_contents("data/$chat_id/voice.txt","❌");
    file_put_contents("data/$chat_id/text.txt","✅");
    file_put_contents("data/$chat_id/rules.txt", "برای تنظیم قوانین روی دستور کلیک کن /setrules ");
    sendaction($chat_id, typing);
    bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"🐭 گروه با موفقیت فعال شد 😊",
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ]
   ]
   ])
   ]);
   }    
   } 
 if($you == "creator" or $you == "administrator") {
if($text == '/lock all'){
    file_put_contents("data/$chat_id/game.txt","❌");
    file_put_contents("data/$chat_id/photo.txt","❌");
    file_put_contents("data/$chat_id/fwd.txt","❌");
    file_put_contents("data/$chat_id/sticker.txt","❌");
    file_put_contents("data/$chat_id/pin.txt","❌");
    file_put_contents("data/$chat_id/doc.txt","❌");
    file_put_contents("data/$chat_id/link.txt","❌");
    file_put_contents("data/$chat_id/video.txt","❌");
    file_put_contents("data/$chat_id/audio.txt","❌");
    file_put_contents("data/$chat_id/voice.txt","❌");
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"🌐 قفل تمامی رسانه ها 🚷",
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
  	 [
 	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	   ]
    ]
    ])
    ]);
    }
    }
 if($you == "creator" or $you == "administrator") {
if($text == '/unlock all'){
    file_put_contents("data/$chat_id/game.txt","✅");
    file_put_contents("data/$chat_id/photo.txt","✅");
    file_put_contents("data/$chat_id/fwd.txt","✅");
    file_put_contents("data/$chat_id/sticker.txt","✅");
    file_put_contents("data/$chat_id/pin.txt","✅");
    file_put_contents("data/$chat_id/doc.txt","✅");
    file_put_contents("data/$chat_id/link.txt","✅");
    file_put_contents("data/$chat_id/video.txt","✅");
    file_put_contents("data/$chat_id/audio.txt","✅");
    file_put_contents("data/$chat_id/voice.txt","✅");
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"گشودن قفل تمامی رسانه ها",
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ]
   ]
   ])
   ]);
   }
   }
 if($you == "creator" or $you == "administrator") {
if($text == '/settings'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"⚙ تنظیمات این گروه به شرح زیر است 💬
              🔐 قفل = ❌
              🔓 باز = ✅",
              'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=>"تصاویر",'url'=>"http://telegram.me/starmaxphp5"],['text'=> "$photo1" ,'url'=>"http://telegram.me/starmaxphp5"]
	  ],
	  [
	  ['text'=>"لینک",'url'=>"http://telegram.me/starmaxphp5"],['text'=> "$link1" ,'url'=>"http://telegram.me/starmaxphp5"]
	  ],
	  [
	  ['text'=>"موزیک",'url'=>"http://telegram.me/starmaxphp5"],['text'=> "$audio1" ,'url'=>"http://telegram.me/starmaxphp5"]
	  ],
	  [
	  ['text'=>"ویس",'url'=>"http://telegram.me/starmaxphp5"],['text'=> "$voice1" ,'url'=>"http://telegram.me/starmaxphp5"]
	  ],
	  [
	  ['text'=>"فیلم",'url'=>"http://telegram.me/starmaxphp5"],['text'=> "$video1" ,'url'=>"http://telegram.me/starmaxphp5"]
	  ],
	  [
	  ['text'=>"استیکر",'url'=>"http://telegram.me/starmaxphp5"],['text'=> "$sticker1" ,'url'=>"http://telegram.me/starmaxphp5"]
	  ],
   [
	  ['text'=>"فروارد",'url'=>"http://telegram.me/starmaxphp5"],['text'=> "$fwd1" ,'url'=>"http://telegram.me/starmaxphp5"]
	  ],
	  [
	  ['text'=>"نوشته",'url'=>"http://telegram.me/starmaxphp5"],['text'=> "$text1" ,'url'=>"http://telegram.me/starmaxphp5"]
	  ],
	  [
	  ['text'=>"بازی",'url'=>"http://telegram.me/starmaxphp5"],['text'=> "$game1" ,'url'=>"http://telegram.me/starmaxphp5"]
	  ],
	  [
	  ['text'=>"فایل",'url'=>"http://telegram.me/starmaxphp5"],['text'=> "$doc1" ,'url'=>"http://telegram.me/starmaxphp5"]
	  ],
	  [
	  ['text'=>"پین",'url'=>"http://telegram.me/starmaxphp5"],['text'=> "$pin1" ,'url'=>"http://telegram.me/starmaxphp5"]
	  ]
   ]
   ])
   ]);
   }  
   }
//========================== الطرد ===============
if($you == "creator" or $you == "administrator") {
if($re && $text =="/kick"){
sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"با موفقیت اخراج شد 👞",
	'reply_to_message_id'=>$message->message_id,
	 'parse_mode'=>'html',
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	 [
	  ['text'=> $re_name ,'url'=>"http://telegram.me/" . $re_user]
	  ]
   ]
   ])
   ]);
   }    
   }
 if($you == "creator" or $you == "administrator") {
 if (strpos($textmessage,"/kick") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "") {
  sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
      ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"با موفقیت اخراج شد 👞",
             'reply_to_message_id'=>$message->message_id,
    ]);
    }    
    }
    }
 
 if($you == "creator" or $you == "administrator") {
if($re && $text =="/ban"){
sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id, // by @wounds1 = mounir
    'user_id'=>$re_id
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"با موفقیت منع شد 🚫",
	'reply_to_message_id'=>$message->message_id,
	 'parse_mode'=>'html',
	   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	 [
	  ['text'=> $re_name ,'url'=>"http://telegram.me/" . $re_user]
	  ]
	  ]
   ])
   ]);
   }    
   }
 if($you == "creator" or $you == "administrator") {
 if (strpos($textmessage,"/ban") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "") {
  sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
      ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
             'text'=>"با موفقیت منع شد 🚫",
             'reply_to_message_id'=>$message->message_id,
     ]);
     }    
     }
     }
 //========================== وضع ترحيب ===============
if ($data == "welcom" ){
if ($you_ == "creator" or $you_ == "administrator"){
     file_put_contents("data/$cllchatid/welcome.txt", "setwelcom");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"پیام خوش امد گویی را ارسال کنید 🔃
*Please now send new  welcome* 🌐", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "سازنده 💡" ,'url'=>"http://telegram.me/four4team"]
	  ],
	  	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشید این کار مخصوص ادمین است⚠️️",
        'show_alert'=>true
     ]);
     } 
     }
  if ($getwelcome == "setwelcom" ){
if ($you == "creator" or $you == "administrator"){
     file_put_contents("data/$chat_id/welcome.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" با موفقیت ذخیره شد ✅", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ],
	  [
 		['text'=>"برگشت 🔙 Back",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }
   
    if($new_member){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"$welcom", 
      'reply_to_message_id'=>$message->message_id,
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
   [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ]
 		]
 		])
   ]);
   } 

 //========================== المساعدة ===============  
if ($you == "creator" or $you == "administrator"){
if($text == '/help'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"این لیست فقط برای مدیر است 🤠
بروی چیزی که میخواید کلیک کنید و آن را انتخاب کنید ✋🏻
This list Just For admins ✨✋🏻
Click to you want and get a order your Gp🚨",
                           'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	 	['text'=>"🔒 setting media «~»  رسانه 🔒",'callback_data'=>"help"]
	  ],
	  [
  	['text'=>"🕴Mods «~»  مدها 🕴",'callback_data'=>"ss"]
	  ],
   [
  	['text'=>"🎭 Devs «~»  توسعه دهنگان 🎭",'callback_data'=>"dev"]
	  ]
   ]
   ])
   ]);
   } 
   }
  if($data == 'bag'){
  if ($you_ == "creator" or $you_ == "administrator"){
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
    'text'=>"این لیست فقط برای مدیر است 🤠
بروی چیزی که میخواید کلیک کنید و آن را انتخاب کنید ✋🏻
This list Just For admins ✨✋🏻
Click to you want and get a order your Gp🚨",
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	  [
	  	['text'=>"🔒 setting media «~»  رسانه 🔒",'callback_data'=>"help"]
 	  ],
	   [
  		['text'=>"🕴Mods «~»  مدها 🕴",'callback_data'=>"ss"]
 	  ],
	   [
	  	['text'=>"🎭 Devs «~»  توسعه دهندگان 🎭",'callback_data'=>"dev"]
	   ]
    ]
    ])
    ]);
    }
    else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشید این کار مخصوص ادمین است⚠️",
        'show_alert'=>true
       ]);
       }
       } 
       elseif ($data == 'dev' )
      {
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"توسعه دهنده @hardboy_021 😊",
       ]);
       }   
//==========================تسهيل عمل ويبهوك ===============
 
 elseif (strpos($textmessage,"/setweb") !== false) {
  $text = explode(" ",$textmessage);
  if ($text['2'] != "" && $text['1'] != "") {
    $web = "https://api.telegram.org/bot" . $text['1'] . "/setwebhook?url=" . $text['2'];
    sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" وبهوک با موفقیت ست شد", 
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	   [
	   ['text'=>"لطفا اینجا کلیک کنید" ,'url'=>"$web"]
 	  ]
    ]
    ])
    ]);
    }    
    }
//========================== المطور ===============
  if($text == 'توسعه دهنده' or $text == '/dev')
{
 $phone = '00000000000';
 $nameea = 'hardboy21';
bot('sendContact',[
 'chat_id'=>$chat_id,
 'phone_number'=>$phone,
 'first_name'=>$nameea
     ]);
     }
 //========================== القوانين ===============
 if ($data == "rules" ){
if ($you_ == "creator" or $you_ == "administrator"){
     file_put_contents("data/$cllchatid/rules.txt", "setrules");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"لطفا الان قوانین را بفرستید  🔃

*Please now send new go  rules* 🌐", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "سازنده 💡" ,'url'=>"http://telegram.me/TeleUnits"]
	  ],
	  [
	 	['text'=>"برگشت 🔙 Back",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"️",
        'show_alert'=>true
     ]);
     } 
     }
  if ($getruels == "setrules" ){
if ($you == "creator" or $you == "administrator"){
     file_put_contents("data/$chat_id/rules.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>" با موفقیت ذخیره شد ✅", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ],
	  [
 		['text'=>"برگشت 🔙 Back",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }

 if($text == '/rules'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"$getruels",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=>"سازنده 🌐" ,'url'=>"http://telegram.me/fourt4eam"]
	  ]
   ]
   ])
   ]);
   }
 //==========================الرابط ===============
 if ($data == "setlink" ){
if ($you_ == "creator" or $you_ == "administrator"){
     file_put_contents("data/$cllchatid/gplink.txt", "setlink");
        	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"لینک گروه را ارسال کنید 🔃
*Please now send new go link* 🌐", 
                         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	  [
	  ['text'=> "سازنده 💡" ,'url'=>"http://telegram.me/TeleUnits"]
	  ],
	  [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
 else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشید این کار مخصوص ادمین است⚠️️",
        'show_alert'=>true
     ]);
     } 
     }
  if ($gplink == "setlink" ){
if ($you == "creator" or $you == "administrator"){
     file_put_contents("data/$chat_id/gplink.txt", $text);  sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"با موفقیت ذخیره شد ✅", 
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=>"سازنده 💡" ,'url'=>"http://telegram.me/TeleUnits"]
	  ],
	  [
 		['text'=>"برگشت 🔙 Back",'callback_data'=>"bagg"]
	  ]
   ]
   ])
   ]);
   }   
   }

if($text == '/link'){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
              'text' =>"$gplink",
                'reply_to_message_id'=>$message->message_id,
         'parse_mode'=>'MARKDOWN',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
 	 [
	  ['text'=> $name ,'url'=>"http://telegram.me/" . $user]
	  ]
   ]
   ])
   ]);
   }   
 //==========================الحظر ===============
 if($message->reply_to_message && $text == "/unban" ){
bot('unbanChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$re_id,
   ]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>'💡 کاربر مورد نظر آنبن شد 🔚',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
     [
     ['text'=>$message->reply_to_message->from->first_name, 'url'=>"https://telegram.me/".$message->reply_to_message->from->username]
     ]
     ]
     ])
     ]);
     } 
 if($you == "creator" or $you == "administrator") {
 if (strpos($textmessage,"/unban") !== false ) {
  $text = explode(" ",$textmessage);
  if ($text['1'] != "") {
 	bot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$text['1']
        ]);
              bot('sendmessage', [
                'chat_id' => $chat_id,
          'text'=>'💡 کاربر مورد نظر آنبن شد 🔚',
             'reply_to_message_id'=>$message->message_id,
   ]);   
   }    
   }
   }

if($data == 'help'){
sendaction($chat_id, typing);
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
					[
					['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					],
					[
					['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
     	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
    	 ],
      [
	     ['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
	     ],
      [
     	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
	     ],
      [
	     ['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
	     ],
      [
     	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
	     ],
	     [
     	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	     ],
	     [
	     ['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
	     ],
	 	   [
	     ['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
	     ],
	     [
	     ['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
	     ],
	 	   [
		    ['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	     ]		
      ]
      ])
      ]);
      } 
 if ( $data == "link" && $link12 == "❌") {
  if ($you_ == "creator" or $you_ == "administrator"){ 
  file_put_contents("data/$cllchatid/link.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
    	 [
    	 ['text'=>"link ~» ✅",'callback_data'=>"link"],['text'=>"لینک ~» ✅",'callback_data'=>"link"]
					],
					[
					['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	     ['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
	     ],
      [
	     ['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
	     ],
      [
	     ['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
	     ],
      [
	     ['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
	     ],
      [
	     ['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
	     ],
	     [
	     ['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	     ],
	     [
	     ['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
	     ],
 	 	  [
 	    ['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
 	    ],
	     [
	     ['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
	     ],
	   	 [
  		  ['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
 	    ]
 	    ]
      ])
      ]);
      } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"️ببخشید این کار مخصوص ادمین است⚠️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "link" && $link12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/link.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
		 			[
						['text'=>"link ~» ❌",'callback_data'=>"link"],['text'=>"لینک ~» ❌",'callback_data'=>"link"]
 					],
						[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
		 			],
		 			[
      	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
     	 ],
       [
      	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
     	 ],
       [
      	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
     	 ],
       [
      	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
     	 ],
       [
      	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
     	 ],
     	 [
      	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	      ],
	      [
      	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
     	 ],
   	 	 [
      	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
     	 ],
    	  [
      	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
     	 ],
   	 	 [
     		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
    	  ]		
       ]
       ])
       ]);   
       }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشید این کار مخصوص ادمین است⚠️️",
        'show_alert'=>true
        ]);
}
}


if ( $data == "tag" && $tag12 == "❌") {
 if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/tag.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» ✅",'callback_data'=>"tag"],	 ['text'=>"تگ ~» ✅",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشید این کار مخصوص ادمین است⚠️️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "tag" && $tag12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/tag.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» ❌",'callback_data'=>"tag"],	 ['text'=>"تگ ~» ❌",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشید این کار مخصوص ادمین است⚠️️",
        'show_alert'=>true
        ]);
}
}
if ( $data == "photo" && $photo12 == "❌") {
  if ($you_ == "creator" or $you_ == "administrator"){ 
  file_put_contents("data/$cllchatid/photo.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» ✅",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» ✅",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشید این کار مخصوص ادمین است⚠️️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "photo" && $photo12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/photo.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» ❌",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» ❌",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشید این کار مخصوص ادمین است⚠️",
        'show_alert'=>true
        ]);
}
}



if ( $data == "fwd" && $fwd12 == "❌") {
  if ($you_ == "creator" or $you_ == "administrator"){ 
  file_put_contents("data/$cllchatid/fwd.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» ✅",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» ✅",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشید این کار مخصوص ادمین است⚠️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "fwd" && $fwd12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/fwd.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» ❌",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» ❌",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشید این کار مخصوص ادمین است⚠️",
        'show_alert'=>true
        ]);
}
}






if ( $data == "game" && $game12 == "❌") {
  if ($you_ == "creator" or $you_ == "administrator"){ 
  file_put_contents("data/$cllchatid/game.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» ✅",'callback_data'=>"game"],	 ['text'=>"بازی ~» ✅",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشید این کار مخصوص ادمین است⚠️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "game" && $game12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/game.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» ❌",'callback_data'=>"game"],	 ['text'=>"بازی ~» ❌",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"️ببخشید این کار مخصوص ادمین است⚠️",
        'show_alert'=>true
        ]);
}
}

if ( $data == "video" && $video12 == "❌") {
  if ($you_ == "creator" or $you_ == "administrator"){ 
  file_put_contents("data/$cllchatid/video.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» ✅",'callback_data'=>"video"],	 ['text'=>"فیلم ~» ✅",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"️ببخشید این کار مخصوص ادمین است⚠️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "video" && $video12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/video.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» ❌",'callback_data'=>"video"],	 ['text'=>"فیلم ~» ❌",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"️ببخشید این کار مخصوص ادمین است⚠️",
        'show_alert'=>true
        ]);
}
}

if ( $data == "voice" && $voice12 == "❌") {
  if ($you_ == "creator" or $you_ == "administrator"){ 
  file_put_contents("data/$cllchatid/voice.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» ✅",'callback_data'=>"voice"],	 ['text'=>"ویس ~» ✅",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"️ببخشید این کار مخصوص ادمین است⚠️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "voice" && $voice12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/voice.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» ❌",'callback_data'=>"voice"],	 ['text'=>"ویس ~» ❌",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"️ببخشید این کار مخصوص ادمین است⚠️",
        'show_alert'=>true
        ]);
}
}


if ( $data == "audio" && $audio12 == "❌") {
  if ($you_ == "creator" or $you_ == "administrator"){ 
  file_put_contents("data/$cllchatid/audio.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» ✅",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» ✅",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشید این کار مخصوص ادمین است⚠️️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "audio" && $audio12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/audio.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» ❌",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» ❌",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"️ببخشید این کار مخصوص ادمین است⚠️",
        'show_alert'=>true
        ]);
}
}


if ( $data == "file" && $doc12 == "❌") {
  if ($you_ == "creator" or $you_ == "administrator"){ 
  file_put_contents("data/$cllchatid/doc.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» ✅",'callback_data'=>"file"],	 ['text'=>"فایل ~» ✅",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشید این کار مخصوص ادمین است⚠️️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "file" && $doc12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/doc.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» ❌",'callback_data'=>"file"],	 ['text'=>"فایل ~» ❌",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"️ببخشید این کار مخصوص ادمین است⚠️",
        'show_alert'=>true
        ]);
}
}



if ( $data == "all" && $text12 == "❌") {
  if ($you_ == "creator" or $you_ == "administrator"){ 
  file_put_contents("data/$cllchatid/text.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					], //the file by mounir
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
					],

					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» ✅",'callback_data'=>"all"],	 ['text'=>"همه ~» ✅",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"️ببخشید این کار مخصوص ادمین است⚠️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "all" && $text12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/text.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» $sticker12",'callback_data'=>"sticker"],['text'=>"استیکر ~» $sticker12",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» ❌",'callback_data'=>"all"],	 ['text'=>"همه ~» ❌",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشید این کار مخصوص ادمین است⚠️️",
        'show_alert'=>true
        ]);
}
}

if ( $data == "sticker" && $sticker12 == "❌") {
  if ($you_ == "creator" or $you_ == "administrator"){ 
  file_put_contents("data/$cllchatid/sticker.txt","✅");
        bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» ✅",'callback_data'=>"sticker"],['text'=>"استیکر ~» ✅",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);
   
 } else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشید این کار مخصوص ادمین است⚠️️",
        'show_alert'=>true
        ]);
}
 }
 if ( $data == "sticker" && $sticker12 == "✅" ) {
  if ($you_ == "creator" or $you_ == "administrator"){ 
 file_put_contents("data/$cllchatid/sticker.txt","❌");
         bot('editmessagetext',[
             'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
            'text'=>" دوست من این لیست برای ⚓️
قفل و ازاد کردن رسانه در گروه میباشد 🚦
رسانه قفل== ❌
رسانه آزاد == ✅",
            'reply_markup'=>json_encode([
                'inline_keyboard'=>[
	 [
						['text'=>"link ~» $link12",'callback_data'=>"link"],['text'=>"لینک ~» $link12",'callback_data'=>"link"]
					],
									[
						['text'=>"sticker ~» ❌",'callback_data'=>"sticker"],['text'=>"استیکر ~» ❌",'callback_data'=>"sticker"]
					],
					[
	['text'=>"photo ~» $photo12",'callback_data'=>"photo"],	 ['text'=>"تصاویر ~» $photo12",'callback_data'=>"photo"]
	 ],
    [
	['text'=>"tag ~» $tag12",'callback_data'=>"tag"],	 ['text'=>"تگ ~» $tag12",'callback_data'=>"tag"]
	 ],
    [
	['text'=>"fwd ~» $fwd12",'callback_data'=>"fwd"],	 ['text'=>"فروارد ~» $fwd12",'callback_data'=>"fwd"]
	 ],
    [
	['text'=>"game ~» $game12",'callback_data'=>"game"],	 ['text'=>"بازی ~» $game12",'callback_data'=>"game"]
	 ],
    [
	['text'=>"video ~» $video12",'callback_data'=>"video"],	 ['text'=>"فیلم ~» $video12",'callback_data'=>"video"]
	 ],
	 [
	['text'=>"voice ~» $voice12",'callback_data'=>"voice"],	 ['text'=>"ویس ~» $voice12",'callback_data'=>"voice"]
	 ],
	 [
	['text'=>"audio ~» $audio12",'callback_data'=>"audio"],	 ['text'=>"موزیک ~» $audio12",'callback_data'=>"audio"]
	 ],
	 	 [
	['text'=>"file ~» $doc12",'callback_data'=>"file"],	 ['text'=>"فایل ~» $doc12",'callback_data'=>"file"]
	 ],
	  [
	['text'=>"all ~» $text12",'callback_data'=>"all"],	 ['text'=>"همه ~» $text12",'callback_data'=>"all"]
	 ],
	 	 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
		
                ]
            ])
        ]);   
 }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"️ببخشید این کار مخصوص ادمین است⚠️",
        'show_alert'=>true
        ]);
}
}




if($data == "ss"  ){
if ($you_ == "creator" or $you_ == "administrator"){
if (!file_exists("data/$cllchatid/warn/helll.txt")) {
    mkdir("data/$cllchatid/warn");   
     bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  این دستورات برای مدیر است 📛
/kick [ id/ reply ] اخراج  کاربر 👞
/ban [ id/ reply ] بن کردن کاربر ⛓
/unban [ id/ reply ] آنبن کردن کاربر ⚖
/del [ reply ] حذف پیام🗑
         «~~~~~~~~~~~~~~»
/warn [ reply ] اخطار به فرد 📍",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"🔲 welcom – خوش امدگویی🔳",'callback_data'=>"welc"]
					],
					[
	 	 			['text'=>"لینک گپ - gp link 📍",'callback_data'=>"gplink"]
		  			],
					[
						['text'=>"🗒 قوانین - rules 📜",'callback_data'=>"rul"]
					],
         [
						['text'=>"♣️ تنظیمات اخطار - setting warn ⬇️",'callback_data'=>"muner"]
					],
	 [
						['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
					],
					 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
      ]
    ])
  ]);
  }   
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"️ببخشید این کار مخصوص ادمین است⚠️",
        'show_alert'=>true
        ]);
}
}
  elseif ($data == '#' )
{
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"این تنظیمات اخطار است ♣️",
]);
}   
 elseif ($data == 'muner' )
{
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"با کلیک بروی هرکدام ➕ افزایش اخطار 
➖کاهش اخطار",
]);
}   
elseif($data == '+'){
if ($you_ == "creator" or $you_ == "administrator"){
        $newwarn = $warn_ + 1;
         $warn_1 = $warn_ + 1;
        file_put_contents("data/$cllchatid/warn/warn.txt", $newwarn);
	bot('editmessagetext',[
         'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  این دستورات برای مدیر است 📛
/kick [ id/ reply ] اخراج  کاربر 👞
/ban [ id/ reply ] بن کردن کاربر ⛓
/unban [ id/ reply ] آنبن کردن کاربر ⚖
/del [ reply ] حذف پیام🗑
         «~~~~~~~~~~~~~~»
/warn [ reply ] اخطار به فرد 📍",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
      [
						['text'=>"🔲 welcom - خوش امدگویی🔳",'callback_data'=>"welc"]
					],
					[
	 	 			['text'=>"لینک گپ - gp link 📍",'callback_data'=>"gplink"]
		  			],
					[
						['text'=>"🗒 قوانین - rules 📜",'callback_data'=>"rul"]
					],
        [
						['text'=>"♣️ تنظیمات اخطار - setting warn ⬇️",'callback_data'=>"muner"]
					],
	 [
						['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_1",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
					],
					 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	  ]
      ]
    ])
  ]);
  }   
  else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"️ببخشید این کار مخصوص ادمین است⚠️",
        'show_alert'=>true
        ]);
}
}
 elseif($data == '-' ){
 if ($you_ == "creator" or $you_ == "administrator"){
        $newwarn = $warn_ - 1;
        $warn_1 = $warn_ - 1;
        file_put_contents("data/$cllchatid/warn/warn.txt", $newwarn);
	bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  این دستورات برای مدیر است 📛
/kick [ id/ reply ] اخراج  کاربر 👞
/ban [ id/ reply ] بن کردن کاربر ⛓
/unban [ id/ reply ] آنبن کردن کاربر ⚖
/del [ reply ] حذف پیام🗑
         «~~~~~~~~~~~~~~»
/warn [ reply ] اخطار به فرد 📍",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
         [
			 			['text'=>"🔲 welcom -  خوش امدگویی🔳",'callback_data'=>"welc"]
  					],
  					[
	 	 			['text'=>"لینک گپ - gp link 📍",'callback_data'=>"gplink"]
		  			],
	   			[
						['text'=>"🗒 قوانین- rules 📜",'callback_data'=>"rul"]
						],
        [
       	['text'=>"♣️ تنظیمات اخطار- setting warn ⬇️",'callback_data'=>"muner"]
  					],
  	     [
	   			['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_1",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
			  		],
         [
         ['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
         ]
         ]
         ])
         ]);
         }   else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشید این کار مخصوص ادمین است⚠️️",
        'show_alert'=>true
        ]);
}
}
  
$warns = $warn - 1;
if ($warns != $warn_2){ 
 if($re &&$text == "/warn"){  
 if($you == "creator" or $you == "administrator"){     
 $nnwarn = $warn_2 + 1;
        file_put_contents("data/$chat_id/warn/$re_id.txt", $nnwarn);
        sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"با عرض پوزش دوست من
تعداد اخطار شما در گروه به حداکثر 
رسیده است ( $nnwarn | $warn )",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
	  ['text'=>"$re_name" ,'url'=>"http://telegram.me/$re_user"]
	  ]
      ]
    ])
  ]);
  }  
 }
 }
 $warns = $warn - 1;
 if ($warns == $warn_2){
if($re && $text == "/warn"){     
if($you == "creator" or $you == "administrator"){     
 file_put_contents("data/$chat_id/warn/$re_id.txt", "0");
        sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"با عرض پوزش دوست من
تعداد اخطار شما در گروه به حداکثر 
رسیده است ( $warn | $warn )",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
	 [
	  ['text'=>"$re_name" ,'url'=>"http://telegram.me/$re_user"]
	  ]
      ]
    ])
  ]);
  sendaction($chat_id, 'typing');
	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$re_id
      ]);
  }
  }
  }
  if($data == "bagg"  ){
if ($you_ == "creator" or $you_ == "administrator"){
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"  این دستورات برای مدیر است 📛
/kick [ id/ reply ] اخراج  کاربر 👞
/ban [ id/ reply ] بن کردن کاربر ⛓
/unban [ id/ reply ] آنبن کردن کاربر ⚖
/del [ reply ] حذف پیام🗑
         «~~~~~~~~~~~~~~»
/warn [ reply ] اخطار به فرد 📍",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"🔲 welcom -  خوش امدگویی🔳",'callback_data'=>"welc"]
		 			],
		 			[
						['text'=>"لینک گپ - gp link 📍",'callback_data'=>"gplink"]
		 			],
	 				[
		 			['text'=>"🗒 قوانین - rules 📜",'callback_data'=>"rul"]
	  			],
       [
  				['text'=>"♣️ تنظیمات اخطار- setting warn ⬇️",'callback_data'=>"muner"]
	  			],
	      [
			 		['text'=>"➖",'callback_data'=>"-"],['text'=>"$warn_",'callback_data'=>"#"],	['text'=>"➕",'callback_data'=>"+"]
	 				],
					 [
     		['text'=>"برگشت 🔙 Back",'callback_data'=>"bag"]
	      ]
       ]
       ])
       ]);
       }   
       else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"️ببخشید این کار مخصوص ادمین است⚠️",
        'show_alert'=>true
        ]);
}
}
  
  
if($data == "welc"  ){
if ($you_ == "creator" or $you_ == "administrator"){
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"این لیست تنظیمات خوش امد گویی است 🤗
 (⬛️ ادیت خوش امد گویی - edit welcom ⬜️)  😄",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"⬛️ Edit welcmo -  تعدیل خوش امدگویی⬜️",'callback_data'=>"welcom"]
					],
					 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"️ببخشید این کار مخصوص ادمین است⚠️",
        'show_alert'=>true
        ]);
}
}
// by @wounds1 = mounir
if($data == "rul"  ){
if ($you_ == "creator" or $you_ == "administrator"){
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"خوش آمدید فهرست قوانین 👁‍🗨
را مشاهده کنید♣️👇🏻
(🖇Edit rules-ویرایش قوانین 📨️)
قوانین جدید برای گروه 🖊",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"🖇Edit rules-تعدیل قوانین 📨️",'callback_data'=>"rules"]
					],
					 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"ببخشید این کار مخصوص ادمین است⚠️️",
        'show_alert'=>true
        ]);
}
}
if($data == "gplink"  ){
if ($you_ == "creator" or $you_ == "administrator"){
 bot('editmessagetext',[
        'chat_id'=>$cllchatid,
	'message_id'=>$cllmsegid,
                'text' =>"تنظیمات لینک گپ🖇
 🔍👇🏻
(📍تنظیم لینک - set link 📍)
تایین لینک جدید📨",
         'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
						['text'=>"📍تعدیل لینک گپ - set link 📍️",'callback_data'=>"setlink"]
					],
					 [
		['text'=>"برگشت 🔙 Back",'callback_data'=>"bagg"]
	  ]
      ]
    ])
  ]);
 
  }else{
    bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"️ببخشید این کار مخصوص ادمین است⚠️",
        'show_alert'=>true
        ]);
}
}

elseif($text == "امار سیستم" && $chat_id == $ADMIN){
 sendaction($chat_id,'typing');
    $user = file_get_contents("Member.txt");
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
 sendmessage($chat_id , " آمار کاربران : $member_count" , "html");
}
elseif($text == "پیغام همگانی" && $chat_id == $ADMIN){
    file_put_contents("ali.txt","bc");
 sendaction($chat_id,'typing');
 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" پیام مورد نظر رو در قالب متن بفرستید:",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
   [['text'=>'/panel']],
      ],'resize_keyboard'=>true])
  ]);
}
elseif($ali == "bc" && $chat_id == $ADMIN){
    file_put_contents("ali.txt","none");
 SendAction($chat_id,'typing');
 bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" پیام همگانی فرستاده شد.",
  ]);
 $all_member = fopen( "Member.txt", "r");
  while( !feof( $all_member)) {
    $user = fgets( $all_member);
   SendMessage($user,$text,"html");
  }
}
elseif ($textmessage == '/leave' && $from_id == $admin){
bot('leavechat',[
'chat_id'=>$chat_id
]);
}

?>
Programmer
 < Munir > @hardboy_021
~~~~~~~~~~~~
Aides developer
« Mohammed » @vps_1
 « zahrra » @devzahraa
 ch = @soper_api


*/