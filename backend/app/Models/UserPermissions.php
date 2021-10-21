<?php

namespace App\Models;

use League\OAuth2\Client\Token\AccessToken;

class UserPermissions {
    private $token;
    private $email;

    public function __construct(AccessToken $accessToken)
    {
        $this->token = $accessToken;

        $values = $accessToken->getValues();
        // $this->email = $values['user']['email'];
        $this->email = 'gianglv@smartosc.com';
    }

    public function getEmail() {
        return $this->getEmail();
    }

    public function isAlgoliaEmployee() {
        return $this->endsWith($this->email, '@algolia.com');
    }

    public function isGuest() {
        return $this->isAlgoliaEmployee() || in_array($this->email, ['vincent@codeagain.com', 'maxiloc@gmail.com', 'gianglv@smartosc.com']);
    }

    private function endsWith($string, $endString)
    {
        $len = strlen($endString);
        if ($len == 0) {
            return true;
        }
        return (substr($string, -$len) === $endString);
    }
}
