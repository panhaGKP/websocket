<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ScoresFixture
 */
class ScoresFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'score' => 1,
                'created' => '2023-03-17 22:37:10',
                'modified' => '2023-03-17 22:37:10',
            ],
        ];
        parent::init();
    }
}
