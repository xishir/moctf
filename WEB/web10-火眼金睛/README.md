## 题目
火眼金睛

## 描述
汝可千军万马之中识得吾项上flag？

## 分值
200

## 解法
编写python脚本获取页面，再查询moctf个数提交给服务器即可，考察脚本编写能力。
```python
import requests as r

r1=r.Session()
r2=r1.get("http://xxxxxx/")
s=len(r2.text.split("moctf"))-1
data={"answer":s-1}
print data
r3=r1.post(url="http://xxxxxx/work.php",data=data)
print r3.text
```