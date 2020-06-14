<?php
namespace Mawdoo3\Drsk\Auth;


class Auth  
{
    public function isAuthed($user = null)
    {
        return isset($user) && !is_null($user) ? "$user logged in from auth" : 'not logged from auth';
    }
}
