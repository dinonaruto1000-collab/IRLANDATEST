<?php
/*
 * @Author: CristianMarinT 
 * @Date: 2019-02-19 12:42:46 
 * @Last Modified by: CristianMarinT
 * @Last Modified time: 2019-05-05 12:58:47
 */

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDefaultRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * Esta migración ajusta la FK de role_id en la tabla users para que
     * tenga un valor por defecto ('2') y sea NOT NULL con onDelete RESTRICT.
     *
     * NOTA: SQLite no soporta dropForeign() porque no tiene ALTER TABLE
     * real para claves foráneas. En SQLite se omite drop/recreación de la FK
     * y la tabla funciona igual ya que SQLite ignora las FK por defecto
     * a menos que se active PRAGMA foreign_keys = ON.
     *
     * @return void
     */
    public function up()
    {
        // Solo ejecutamos el cambio de FK en drivers que lo soportan (MySQL, PostgreSQL)
        if (DB::getDriverName() !== 'sqlite') {
            Schema::table('users', function (Blueprint $table) {
                // Eliminar la FK anterior para poder redefinirla con nuevas opciones
                $table->dropForeign(['role_id']);

                // Recrear la FK con valor por defecto '2' (rol básico), NOT NULL y RESTRICT
                $table->foreign('role_id')
                    ->references('id')
                    ->on('roles')
                    ->default('2')
                    ->nullable(false)
                    ->onDelete('restrict');
            });
        }
        // En SQLite: no se hace nada, el campo role_id ya existe desde la migración
        // 2017_11_26_013050_add_user_role_relationship y funciona correctamente.
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Solo revertimos en drivers que soporten dropForeign
        if (DB::getDriverName() !== 'sqlite') {
            Schema::table('users', function (Blueprint $table) {
                $table->dropForeign(['role_id']);
                $table->dropColumn('role_id');
            });
        }
    }
}
