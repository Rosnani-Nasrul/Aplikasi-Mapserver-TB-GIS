<? session_start();
if (session_is_registered('user_id'))
//hapus session
session_unregister ("user_i");
session_unregister ("user_name");
