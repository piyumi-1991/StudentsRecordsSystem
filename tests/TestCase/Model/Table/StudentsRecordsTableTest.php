<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\StudentsRecordsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\StudentsRecordsTable Test Case
 */
class StudentsRecordsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\StudentsRecordsTable
     */
    protected $StudentsRecords;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.StudentsRecords',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('StudentsRecords') ? [] : ['className' => StudentsRecordsTable::class];
        $this->StudentsRecords = $this->getTableLocator()->get('StudentsRecords', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->StudentsRecords);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
