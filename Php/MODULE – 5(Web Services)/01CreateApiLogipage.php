<?php
{\rtf1\ansi\ansicpg1252\deff0\nouicompat\deflang1033{\fonttbl{\f0\froman\fcharset0 Times New Roman;}{\f1\fnil\fcharset0 Calibri;}}
{\colortbl ;\red0\green0\blue0;}
{\*\generator Riched20 10.0.19041}\viewkind4\uc1 
\pard\sa200\sl276\slmult1\cf1\b\f0\fs40\lang9              MODULE \endash  5(Web Services) \par
\par

\pard\fs20 Q-1 \b0\fs28 Create API for Registration & Login Page. \par
\par
Ans:\par
\par
\tab\tab API for Registration\par
\tab $register= $this->select\par
\tab ("users",array("email"=>$_REQUEST['email']));\par
\tab echo json_encode($register);\par
\par
\tab\tab <script>\par
\par
\tab\tab function check(e)\par
\tab\tab\{\par
\tab\tab      $.ajax(\{\par
\tab\tab\tab type:"post",data:\{"email":e.value\},\par
\tab\tab\tab url:"the path of the api",\par
\tab\tab\tab success:function(response)\par
\tab\tab\tab\{\par
\tab\tab\tab\tab console.log(response);\par
\tab\tab\tab\tab objectdata = JSON.parse(response)\par
\tab\tab\tab\tab console.log(objectdata.code);\tab\par
\tab\tab\tab\}\par
\tab\tab\tab\})\par
\tab\tab\}\par
\tab\tab </script>\par
\par
\tab\tab\par
\tab API for Login\par
\tab\par
\tab $login= $this->insert("users");\par
\tab echo json_encode($login);\par
\par
\par
Q-2 \fs24  \fs28 Create Web Service for your MVC Project.\par
        Create API for Image Uploading. \par
\par
Ans:\par
\cf0\f1\fs22\tab\tab\cf1\f0\fs28 API for Image Uploading\par
\tab\par
\tab $imageupload= $this->insert("image");\par
\tab echo json_encode($imageupload);\par

\pard\sa200\sl276\slmult1\cf0\f1\fs22\par
}



?>