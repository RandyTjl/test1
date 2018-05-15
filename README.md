# test
1.首先用composer require tjl/test:dev-master下载开发版
 
2.注册服务和取别名在config/app.php
Tjl\Test\TestServiceProvider::class
'Test' => Tjl\Test\Facades\TestFacades::class, 
 
然后php artisan vendor:publish --provider="Tjl\Test\testServiceProvider"
复制里面的配置文件和加载路由
