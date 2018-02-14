## 题目
文件包含

## 描述
LFI：local file include

## 分值
100

## 解法
本地文件包含漏洞，使用
`php://filter/read=convert.base64-encode/resource=`  
将`flag.php`的源码base64加密后输出，考察的是`php文件包含`相关知识
