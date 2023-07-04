<?php

namespace App\Model;

class WelcomeModel
{
    const SITE_TITLE_LABEL = 'Titre du site';
    const SITE_TITLE_NAME = 'blog_title';

    const SITE_INSTALLED_LABEL = 'Site installé';
    const SITE_INSTALLED_NAME = 'blog_installed';

    private $siteTitle;
    private $username;
    private $password;

    private $email;

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getSiteTitle()
    {
        return $this->siteTitle;
    }

    public function setSiteTitle($siteTitle)
    {
        $this->siteTitle = $siteTitle;
    }
     public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): static
    {
        $this->email = $email;

        return $this;
    }
}