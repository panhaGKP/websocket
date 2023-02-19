<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateScoresTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change(): void
    {
        $table = $this->table('scores');
        $table->addColumn('score', 'integer',[
            'default'=> null,
            'limit'=>11,
            'null'=>true
        ]);
        $table->addColumn('created','datetime',[
            'default'=>'CURRENT_TIMESTAMP',
            'limit'=>null,
            'null'=>false
        ]);
        $table->addColumn('modified','datetime',[
           'default'=>null,
           'limit'=>null,
           'null'=>true
        ]);
        $table->create();
    }
}
