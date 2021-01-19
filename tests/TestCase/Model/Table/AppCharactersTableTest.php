<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AppCharactersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AppCharactersTable Test Case
 */
class AppCharactersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AppCharactersTable
     */
    public $AppCharacters;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AppCharacters',
        'app.Exts',
        'app.AppPrankScripts',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AppCharacters') ? [] : ['className' => AppCharactersTable::class];
        $this->AppCharacters = TableRegistry::getTableLocator()->get('AppCharacters', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AppCharacters);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
