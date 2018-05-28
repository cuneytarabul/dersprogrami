<?php

use yii\db\Migration;

/**
 * Class m180527_205839_dersprogrami
 */
class m180527_205839_dersprogrami extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180527_205839_dersprogrami cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
      $this->createTable('dersprogrami',[
        'programID' =>$this->primaryKey()->notNull(),
        'ders_adi'=>$this->string()->notNull(),
        'ders_hocasi'=>$this->string()->notNull(),
        'ders_gunu'=>$this->string()->notNull(),
        'ders_saati'=>$this->string()->notNull(),
      ]);

      $this->insert('dersprogrami',[
        'ders_adi'=>'Fizik',
        'ders_hocasi'=>'Sadık Tunca',
        'ders_gunu'=>'Salı',
        'ders_saati'=>'10.00-14.00',
      ]);
    }

    public function down()
    {
        echo "m180527_205839_dersprogrami cannot be reverted.\n";

        return false;
    }

}
