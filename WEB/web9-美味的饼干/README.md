## 题目
美味的饼干

## 描述
好吃！美味！

## 分值
150

## 解法
抓包发现`cookie`是user的`md5+base64`，构造user的md5+base64为`admin`，访问即可拿到flag。考察的是修改cookie