### 修改国内镜像
"repositories": {
    "packagist": {
        "type": "composer",
        "url": "https://packagist.phpcomposer.com"
    }
}
### Could not find a version of package matching your minimum-stability (stable)
后面加上:dev-master 原因很可能时未发布release包
composer require jd-kepler/jd-kepler:dev-master
