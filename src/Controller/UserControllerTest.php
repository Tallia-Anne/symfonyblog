<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserControllerTest extends WebTestCase
{
public function testRegistrationSuccess()
{
$client = static::createClient();

$crawler = $client->request('GET', '/user/register');

$form = $crawler->selectButton('Register')->form();
$form['registration_form[username]'] = 'test';
$form['registration_form[email]'] = 'test@example.com';
$form['registration_form[plainPassword]'] = 'securepassword';

$crawler = $client->submit($form);

$this->assertTrue($client->getResponse()->isRedirect('/')); // Redirection après l'inscription réussie
}
}