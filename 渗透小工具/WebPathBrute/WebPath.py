"""
跑一级目录
字典每行开头带/
"""

import requests
import re

def req(res):
    url = input("Target:\r\n")
    print("WebPathBrute Start!\n")
    headers = {'user-agent': 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36','Connection':'close'}
    for i in res:
        r = requests.get(url+i,headers=headers) #字典里有/所以此处不加，没有要加上/
        requests.adapters.DEFAULT_RETRIES=2
        if r.status_code == 200:
            # if re.search('网站自定义404页面特征',r.text):
            #     pass
            # else:
            #     print(url+i)
            print(url+i)
        else:
            pass
def dic():
    lie = []
    path = input("Dictionary:\r\n")
    with open(path,encoding='UTF-8') as f:
        for line in f.readlines():
            line = line.strip()
            lie.append(line)
    return lie

if __name__ == "__main__":
    dic = dic()
    req(dic)
