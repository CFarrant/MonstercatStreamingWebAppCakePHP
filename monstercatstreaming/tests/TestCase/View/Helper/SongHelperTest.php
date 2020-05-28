<?php
declare(strict_types=1);

namespace App\Test\TestCase\View\Helper;

use App\View\Helper\SongHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\SongHelper Test Case
 */
class SongHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\View\Helper\SongHelper
     */
    protected $Song;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->Song = new SongHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Song);

        parent::tearDown();
    }
}
