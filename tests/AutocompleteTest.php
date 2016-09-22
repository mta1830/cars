<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AutocompleteTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $miguel = seed('User', [
          'name'  => 'Miguel',
          'email' => 'mta1830@gmail.com'
        ]);

        $jeffer = seed('User', [
          'name'  => 'Jeffer',
          'email' => 'jeffer@gmail.com'
        ]);

        $jesus = seed('User', [
          'name'  => 'Jesus',
          'email' => 'jesus@gmail.com'
        ]);

        seed('User', ['name'  => 'Yelen', 'email' => 'yeaponte@gmail.com']);
        seed('User', ['name'  => 'Duimar', 'email' => 'dui@gmail.com']);
        seed('User', ['name'  => 'Guillermo', 'email' => 'guille@gmail.com']);


        $this->get('autocomplete/users?term=miguel')
            ->seeStatusCode(200)
            ->seeJsonEquals([
              [
                'id'    => $miguel->id,
                'name'  => 'Miguel',
                'email' => 'mta1830@gmail.com'
              ]
            ]);

          $this->get('autocomplete/users?term=je')
              ->seeStatusCode(200)
              ->seeJsonEquals([
                [
                  'id'    => $jeffer->id,
                  'name'  => 'Jeffer',
                  'email' => 'jeffer@gmail.com'
                ],
                [
                  'id'    => $jesus->id,
                  'name'  => 'Jesus',
                  'email' => 'jesus@gmail.com'
                ]
              ]);
    }
}
