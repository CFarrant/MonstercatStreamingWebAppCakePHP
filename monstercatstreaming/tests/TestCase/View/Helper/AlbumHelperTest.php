<?php
declare(strict_types=1);

namespace App\Test\TestCase\View\Helper;

use App\View\Helper\AlbumHelper;
use Cake\TestSuite\TestCase;
use Cake\View\View;

/**
 * App\View\Helper\AlbumHelper Test Case
 */
class AlbumHelperTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\View\Helper\AlbumHelper
     */
    protected $Album;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $view = new View();
        $this->Album = new AlbumHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Album);

        parent::tearDown();
    }
}
