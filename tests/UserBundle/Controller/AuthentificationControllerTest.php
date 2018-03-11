<?php
/**
 * Created by PhpStorm.
 * User: ville
 * Date: 11/03/2018
 * Time: 23:44
 */

namespace Tests\UserBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class AuthentificationControllerTest extends WebTestCase
{
    private $client;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->client = static::createClient();
    }

    public function testLogin()
    {
        $crawler = $this->client->request('GET', '/login');
        $this->assertGreaterThan(
            0,
            $crawler->filter('html:contains("Welcome to the Authentification:login page")')->count()
        );
    }
}