import requests as r

r1=r.Session()
r2=r1.get("http://xxxxxx/")
s=len(r2.text.split("moctf"))-1
data={"answer":s-1}
print data
r3=r1.post(url="http://xxxxxx/work.php",data=data)
print r3.text

