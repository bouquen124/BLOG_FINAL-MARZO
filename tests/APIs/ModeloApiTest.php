<?php namespace Tests\APIs;

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Modelo;

class ModeloApiTest extends TestCase
{
    use ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_modelo()
    {
        $modelo = factory(Modelo::class)->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/modelos', $modelo
        );

        $this->assertApiResponse($modelo);
    }

    /**
     * @test
     */
    public function test_read_modelo()
    {
        $modelo = factory(Modelo::class)->create();

        $this->response = $this->json(
            'GET',
            '/api/modelos/'.$modelo->id
        );

        $this->assertApiResponse($modelo->toArray());
    }

    /**
     * @test
     */
    public function test_update_modelo()
    {
        $modelo = factory(Modelo::class)->create();
        $editedModelo = factory(Modelo::class)->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/modelos/'.$modelo->id,
            $editedModelo
        );

        $this->assertApiResponse($editedModelo);
    }

    /**
     * @test
     */
    public function test_delete_modelo()
    {
        $modelo = factory(Modelo::class)->create();

        $this->response = $this->json(
            'DELETE',
             '/api/modelos/'.$modelo->id
         );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/modelos/'.$modelo->id
        );

        $this->response->assertStatus(404);
    }
}
