## 题目
访问限制

## 描述
什么网站这么难访问？

## 分值
50

## 解法
burpsuite抓包修改http头部的user-agent含有`NAIVE`，language含有`zh-HK`，访问即可看到flag。