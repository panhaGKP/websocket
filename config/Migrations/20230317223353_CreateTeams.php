<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateTeams extends AbstractMigration
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
        $table = $this->table('teams');
        $table->addColumn('name','string',[
            'default'=>null,
            'null'=>false,
            'limit'=>255
        ]);
        $table->addColumn('created','datetime',[
            'default'=>'CURRENT_TIMESTAMP',
            'null'=>false,
            'limit'=>null,
        ]);
        $table->addColumn('modified','datetime',[
            'default'=>null,
            'null'=>true,
            'limit'=>null,
        ]);
        $table->create();
    }
}
