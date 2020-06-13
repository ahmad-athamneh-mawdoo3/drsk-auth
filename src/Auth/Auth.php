<?php
namespace mawdoo3\drsk\auth;


class Auth  
{
    public static function isAuthed($user = null)
    {
        return isset($user) && !is_null($user) ? "$user logged in from auth" : 'not logged from auth';
    }
}
