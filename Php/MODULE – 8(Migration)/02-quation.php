MODULE – 8(Migration)

Q-2:- Call MySQLi Store Procedure from Laravel ?

  $procedure = "DROP PROCEDURE IF EXISTS `get_posts_by_userid`;
            CREATE PROCEDURE `get_posts_by_userid` (IN idx int)
            BEGIN
            SELECT * FROM posts WHERE user_id = idx;
            END;";
  
        \DB::unprepared($procedure);

Route::get('call-procedure', function () {
  
    $postId = 1;
    $getPost = DB::select(
       'CALL get_posts_by_userid('.$postId.')'
    );
  
    dd($getPost);
      
});
