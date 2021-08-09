<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTrue()
    {
        $user = new User();

        $user->setEmail('test@email.com')
            ->setNom('test')
            ->setPrenom('prenom')
            ->setPassword('password')
            ->setAPropos('a propos')
            ->setInstagram('instagram');
        
            $this->assertTrue($user->getEmail() === 'test@email.com');
            $this->assertTrue($user->getNom() === 'test');
            $this->assertTrue($user->getPrenom() === 'prenom');
            $this->assertTrue($user->getPassword() === 'password');
            $this->assertTrue($user->getAPropos() === 'a propos');
            $this->assertTrue($user->getInstagram() === 'instagram');

    }

}
