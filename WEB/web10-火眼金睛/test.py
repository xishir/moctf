import requests as r



r1=r.Session()

r2=r1.get("http://cmcc.codemonster.cn/datac9c5aa521c634c9344de5011f816800c/web/html/")
s=len(r2.text.split("moctf"))-1
data={"answer":s-1}
print data
r3=r1.post(url="http://cmcc.codemonster.cn/datac9c5aa521c634c9344de5011f816800c/web/html/work.php",data=data)
print r3.text

