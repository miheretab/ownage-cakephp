<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AppCategoriesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AppCategoriesTable Test Case
 */
class AppCategoriesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AppCategoriesTable
     */
    public $AppCategories;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AppCategories',
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
        $config = TableRegistry::getTableLocator()->exists('AppCategories') ? [] : ['className' => AppCategoriesTable::class];
        $this->AppCategories = TableRegistry::getTableLocator()->get('AppCategories', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AppCategories);

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
