<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AutorsFixture
 */
class AutorsFixture extends TestFixture
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
                'nombre' => 'Lorem ipsum dolor sit amet',
                'pais' => 'Lorem ipsum dolor sit amet',
                'imagen' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-10-24 15:30:05',
                'modified' => '2022-10-24 15:30:05',
            ],
        ];
        parent::init();
    }
}
