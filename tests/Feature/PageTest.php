<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PageTest extends TestCase
{
//    page d'accueil
    public function test_home(): void
    {
        $response = $this->get('/');
        
        $response->assertOk();
    }
//    pages de destinations
    public function test_destination(): void
    {

        $response = $this->get('/destination');

        $response->assertStatus(302);
    }
    public function test_destination_moon(): void
    {

        $response = $this->get('/destination/moon');

        $response->assertOk();
    }
    public function test_destination_mars(): void
    {

        $response = $this->get('/destination/mars');

        $response->assertOk();
    }
    public function test_destination_europa(): void
    {

        $response = $this->get('/destination/europa');

        $response->assertOk();
    }
    public function test_destination_titan(): void
    {

        $response = $this->get('/destination/titan');

        $response->assertOk();
    }
//    pages d'equipage
    public function test_crew(): void
    {

        $response = $this->get('/crew');

        $response->assertStatus(302);
    }
    public function test_crew_douglas_hurley(): void
    {
        $response = $this->get('/crew/douglas_hurley');

        $response->assertOk();
    }
    public function test_crew_mark_shuttleworth(): void
    {
        $response = $this->get('/crew/mark_shuttleworth');

        $response->assertOk();
    }
    public function test_crew_victor_glover(): void
    {
        $response = $this->get('/crew/victor_glover');

        $response->assertOk();
    }
    public function test_crew_anousheh_ansari(): void
    {
        $response = $this->get('/crew/anousheh_ansari');

        $response->assertOk();
    }
// pages de technologie
    public function test_technology(): void
    {

        $response = $this->get('/technology');

        $response->assertStatus(302);
    }
    public function test_technology_launcher(): void
    {
        $response = $this->get('/technology/launcher');

        $response->assertOk();
    }
    public function test_technology_spaceport(): void
    {
        $response = $this->get('/technology/spaceport');

        $response->assertOk();
    }
    public function test_technology_capsule(): void
    {
        $response = $this->get('/technology/capsule');

        $response->assertOk();
    }
}