# 京东API for laravel5.6+
京东宙斯SDK laravel封装，同步官方最新版 http://jos.jd.com/doc/channel.htm?id=285

## 版本说明:
`本版本是根据 niugengyun/jingdong-jos-client 包修改而来，因为原来的包缺少一些我需要的京东联盟类，且不支持5.7的版本，所以添加了一些包内容户进行了重新发布，著作权依然归原作者所有`
## laravel
### 安装
`composer require gengyun/jingdong-jos-client`
### 配置
* 执行 `php artisan vendor:publish --provider="GengYun\JosClient\JosClientServiceProvider"` 生成配置文件
* 编辑.env文件，设置JINGDONG_APP_KEY,JINGDONG_APP_SECRET,JINGDONG_LOG_PATH
### 示例代码
```
<?php
use GengYun\JosClient\Facades\JosClient;
use Jos\Request\WaresSearchRequest;

$josclient = JosClient::connection();
$req = new WaresSearchRequest;
$req->setFields('ware_id,ware_status,title');
$req->setPage(1);
$req->setPageSize(100);
$resp = josclient->execute($req,$token);

dd($resp);
```
### 上面示例中的 $token 获取示例（基于最新的京东文档）

```
    public static function urlJdToken($code = '')
    {
        $config = config('common.jd_config');
        $c_appkey = $config['appkey'];
        $c_secret = $config['secretKey'];
        $redirect_uri = $config['redirect_uri'];
        if ($code != "") {
            $base_url = 'https://open-oauth.jd.com/oauth2/access_token?app_key=' . $c_appkey . '&app_secret=' . $c_secret . '&grant_type=authorization_code&code=' . $code;
            $access_info = self::$curl->get($base_url);
            //如果有错误则返回错误
            if (isset($access_info->msg) && $access_info->msg != '') {
                return ['msg' => $access_info->msg];
            }
            //把获取到的信息入库或者存入文件
            //do some thing 
            saveDb($access_info);
            
        } else {
            //初始化跳转到授权页面
            return Redirect::to('https://open-oauth.jd.com/oauth2/to_login?app_key=' . $c_appkey . '&response_type=code&redirect_uri=' . $redirect_uri . '&state=9&scope=snsapi_base');
        }
    }
```
