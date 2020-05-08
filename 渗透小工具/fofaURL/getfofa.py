import requests
import json
import base64

def main():
    email=""    #email
    key=""  #key
    targetsrting='title="情报中心"' #搜索关键字
    target=base64.b64encode(targetsrting.encode('utf-8')).decode("utf-8")
    page="1"    #翻页数
    size="3"   #每页返回记录数
    url="https://fofa.so/api/v1/search/all?email="+email+"&key="+key+"&qbase64="+target+"&size="+size
    #print(url)
    #默认返回url+IP+port
    resp = requests.get(url)
    data_model = json.loads(resp.text)

    data_url=[]

    for i in data_model['results']:     #取结果列表
        for j in i[0:1]:    #取结果列表中的每个列表的url,如果需要IP则修改为[1:2]
            data_url.append(j)
    save=open('fofaURL.txt','a+')
    for i in data_url:
        save.write(i+"\n")

    save.close()
    #print(data_model)


if __name__ == '__main__':
    main()