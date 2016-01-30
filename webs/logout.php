<? session_start();
if (session_is_registered('user_id'))
//hapus session
session_unregister ("user_id");
session_unregister ("user_name");
