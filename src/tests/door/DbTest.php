<?php

namespace Tests\Door;

use App;
use \DB;
use app\Contracts\HelloContract;
use app\Contracts\Http\Hello;
use Illuminate\Support\Facades\Log;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Woodw\Utils\Helpers\UtilsHelper;

class DbTest extends TestCase {

    private $table = 'dbtest';

    protected function setUp() {
        parent::setUp();
        $this->init();
    }

    /**
     * 初始化数据
     */
    public function init() {
        //truncate
        $result = DB::statement("truncate table {$this->table}");
        Log::info($result);

        //init data
        foreach (range(1, 10) as $item) {
            $result = DB::insert("insert into {$this->table}(name,votes) values (?,?)", ["Dayle-{$item}", rand(1, 10)]);
            Log::alert($result);
        }
    }


    /**
     * A basic test example.
     *
     * @test
     * @return void
     */
    public function crud() {

        $data = DB::selectOne('select * from dbtest order by votes desc');
        print_r($data);
        self::assertNotEmpty($data);

        //update
        $votes = $data->votes + 1;
        $affected = DB::update("update {$this->table} set votes = ? where id = ?", [$votes, $data->id]);
        print_r($affected);
        self::assertEquals($affected,1);

        $data = DB::selectOne('select * from dbtest where id=:id', ['id' => $data->id]);
        print_r($data);
        self::assertNotEmpty($data);

        //delete
        $deleted = DB::delete("delete from {$this->table} where id=:id", ['id' => $data->id]);
        print_r($deleted);
        self::assertTrue($deleted == 1);

        //$result = DB::statement('drop table users');
    }


    /**
     */
    public function ts() {
        DB::transaction(function () {
            DB::table('users')->update(['votes' => 1]);

            //DB::table('posts')->delete();
        });
    }


    /**
     *
     * 处理死锁
     */
    public function ts2() {
        DB::transaction(function () {
            DB::table('users')->update(['votes' => 1]);

            DB::table('posts')->delete();
        }, 5);
    }


    /**
     */
    public function ts3() {
        try {
            DB::beginTransaction();

            DB::commit();
        } catch (\Exception $ex) {

            DB::commit();
        }
    }


}
