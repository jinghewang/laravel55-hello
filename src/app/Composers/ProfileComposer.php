<?php
/**
 * Created by PhpStorm.
 * User: hbd
 * Date: 2017/12/6
 * Time: 下午4:54
 */

namespace App\Composers;

use Illuminate\View\View;
use App\Repositories\UserRepository;

class ProfileComposer {


    /**
     * 用户 repository 实现
     *
     * @var UserRepository
     */
    protected $users;

    /**
     * 创建一个新的 profile composer
     *
     * @param  UserRepository  $users
     * @return void
     */
    public function __construct(UserRepository $users)
    {
        // 依赖关系由服务容器自动解析...
        $this->users = $users;
    }

    /**
     * 将数据绑定到视图。
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('count', $this->users->count());
    }
}