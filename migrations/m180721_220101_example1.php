<?php

use yii\db\Schema;

class m180721_220101_example1 extends \yii\db\Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }
        
        $this->createTable('comunas', [
            'id' => $this->primaryKey(),
            'nombre' => $this->string(45),
            'cod_situr' => $this->string(45),
            'rif' => $this->string(45),
            'tipo_comuna' => $this->string(45),
            'numero_consejos_comunales' => $this->integer(11),
            'parroquia' => $this->string(45),
            'sector' => $this->string(45),
            'direccion' => $this->string(45),
            'telefono' => $this->string(45),
            'correo' => $this->string(45),
            ], $tableOptions);
                $this->createTable('datos_personales', [
            'id' => $this->primaryKey(),
            'comunas_id' => $this->integer(11)->notNull(),
            'nac' => $this->string(45),
            'cedula' => $this->string(45),
            'primer_apellido' => $this->string(45),
            'segundo_apellido' => $this->string(45),
            'primer_nombre' => $this->string(45),
            'segundo_nombre' => $this->string(45),
            'sexo' => $this->tinyint(1),
            'fecha_nacimiento' => $this->string(45),
            'edad' => $this->integer(11),
            'fecha_vive_comunidad' => $this->date(),
            'tiempo_vive_comunidad' => $this->integer(11),
            'FOREIGN KEY ([[comunas_id]]) REFERENCES comunas ([[id]]) ON DELETE CASCADE ON UPDATE CASCADE',
            ], $tableOptions);
                
    }

    public function down()
    {
        $this->dropTable('datos_personales');
        $this->dropTable('comunas');
    }
}
