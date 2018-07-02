### 1 model 在数据库复制一条的简洁方法：  ###
* $oldass=RmcAssessitem::findOne($id); //查出一条记录  
$oldass->setOldAttributes(NULL);  
$oldass->id=NULL;    
$oldass->save();  //生成一条新的记录,复制了除id外的其它属性

### 2 Bootstrap的css文件不能自动更新：  ###
* 打开vendor\yiisoft\yii2-bootstrap\BootstrapAsset.php  
修改为  
public $basePath = '@webroot';  
public $baseUrl = '@web';  
public $sourcePath =NULL;  

### 3 yii2 高级版advanced中使用console命令行：  ###
* 打开console\config\main.php页面  
修改'controllerNamespace' => 'console\controllers'   
然后在console\controllers文件夹内建控制器文件即可,例如TestController.php文件
