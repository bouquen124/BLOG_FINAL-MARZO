<?php namespace Tests\Repositories;

use App\Models\Modelo;
use App\Repositories\ModeloRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Tests\ApiTestTrait;

class ModeloRepositoryTest extends TestCase
{
    use ApiTestTrait, DatabaseTransactions;

    /**
     * @var ModeloRepository
     */
    protected $modeloRepo;

    public function setUp() : void
    {
        parent::setUp();
        $this->modeloRepo = \App::make(ModeloRepository::class);
    }

    /**
     * @test create
     */
    public function test_create_modelo()
    {
        $modelo = factory(Modelo::class)->make()->toArray();

        $createdModelo = $this->modeloRepo->create($modelo);

        $createdModelo = $createdModelo->toArray();
        $this->assertArrayHasKey('id', $createdModelo);
        $this->assertNotNull($createdModelo['id'], 'Created Modelo must have id specified');
        $this->assertNotNull(Modelo::find($createdModelo['id']), 'Modelo with given id must be in DB');
        $this->assertModelData($modelo, $createdModelo);
    }

    /**
     * @test read
     */
    public function test_read_modelo()
    {
        $modelo = factory(Modelo::class)->create();

        $dbModelo = $this->modeloRepo->find($modelo->id);

        $dbModelo = $dbModelo->toArray();
        $this->assertModelData($modelo->toArray(), $dbModelo);
    }

    /**
     * @test update
     */
    public function test_update_modelo()
    {
        $modelo = factory(Modelo::class)->create();
        $fakeModelo = factory(Modelo::class)->make()->toArray();

        $updatedModelo = $this->modeloRepo->update($fakeModelo, $modelo->id);

        $this->assertModelData($fakeModelo, $updatedModelo->toArray());
        $dbModelo = $this->modeloRepo->find($modelo->id);
        $this->assertModelData($fakeModelo, $dbModelo->toArray());
    }

    /**
     * @test delete
     */
    public function test_delete_modelo()
    {
        $modelo = factory(Modelo::class)->create();

        $resp = $this->modeloRepo->delete($modelo->id);

        $this->assertTrue($resp);
        $this->assertNull(Modelo::find($modelo->id), 'Modelo should not exist in DB');
    }
}
