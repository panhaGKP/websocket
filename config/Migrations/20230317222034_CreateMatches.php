<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateMatches extends AbstractMigration
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
        $table = $this->table('matches');
        $table->addColumn('room_code','integer',[
            'default' => null,
            'limit'=>11,
            'null'=>false
        ]);
        $table->addColumn('bleu_team_id','integer',[
            'limit'=>11,
            'default'=>null,
            'null'=>false
        ]);
        $table->addColumn('bleu_team_name','string',[
            'limit'=>255,
            'default'=>null,
            'null'=>true
        ]);
        $table->addColumn('bleu_team_score','integer',[
            'limit'=>11,
            'default'=>0,
            'null'=>false
        ]);
        $table->addColumn('red_team_id','integer',[
            'limit'=>11,
            'default'=>null,
            'null'=>false
        ]);
        $table->addColumn('red_team_name','string',[
            'limit'=>255,
            'default'=>null,
            'null'=>true
        ]);
        $table->addColumn('red_team_score','integer',[
            'limit'=>11,
            'default'=>0,
            'null'=>false
        ]);
        $table->addColumn('timer','integer',[
            'limit'=>11,
            'default'=>0,
            'null'=>false
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
