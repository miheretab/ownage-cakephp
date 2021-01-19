<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AppPrankScriptsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AppPrankScriptsTable Test Case
 */
class AppPrankScriptsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AppPrankScriptsTable
     */
    public $AppPrankScripts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AppPrankScripts',
        'app.Exts',
        'app.DefaultAppCharacters',
        'app.AppCategories',
        'app.AppCharacters',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AppPrankScripts') ? [] : ['className' => AppPrankScriptsTable::class];
        $this->AppPrankScripts = TableRegistry::getTableLocator()->get('AppPrankScripts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AppPrankScripts);

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
