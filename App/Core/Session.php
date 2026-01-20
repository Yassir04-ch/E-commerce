<?php
namespace App\Core;
class Session {
    
    public static function start() {
            session_start();
    }

    public static function setSession($key, $value) {
        self::start();
        $_SESSION[$key] = $value;
    }

    public static function remove($key) {
        self::start();
            unset($_SESSION[$key]);
    }

    public static function destroy() {
        self::start();
        session_destroy();
    }
}
?>
