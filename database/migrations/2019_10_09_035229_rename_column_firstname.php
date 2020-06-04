<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameColumnFirstname extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::table('members', function (Blueprint $table) {
            $table->renameColumn('member_pass', '__member_pass');
            $table->renameColumn('first_pass', '__first_pass');
        });

        Schema::table('members', function (Blueprint $table) {
            $table->string('member_pass', 255)->nullable()->comment('パスワード');
            $table->string('first_pass', 255)->nullable()->comment('初期パスワード');
        });

        foreach (DB::table('members')->select('id', '__member_pass', '__first_pass')->cursor() as $number => $member) {
            DB::table('members')->where('id', $member->id)->update([
                'member_pass' => Hash::make($member->__member_pass),
                'first_pass' => Hash::make($member->__first_pass),
            ]);

            if ($number > 0 && $number % 1000 == 0) {
                echo "{$number}件" . PHP_EOL;
            }
        }
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
