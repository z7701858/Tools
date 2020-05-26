# -*- coding:utf-8 -*-
import requests
from lxml import etree
import base64
import re
import time

cookie = input("请输入你的 _fofapro_ars_session : ")

def spider():
    header = {
        "Connection": "keep-alive",
        "Cookie": "_fofapro_ars_session=" + cookie,
    }
    search = input('please input your key: \n')
    searchbs64 = (str(base64.b64encode(search.encode('utf-8')), 'utf-8'))
    print("spider website is :https://fofa.so/result?&qbase64=" + searchbs64)
    html = requests.get(url="https://fofa.so/result?&qbase64=" + searchbs64, headers=header).text
    pagenum = re.findall('>(\d*)</a> <a class="next_page" rel="next"', html)
    print("have page: "+pagenum[0])
    stop_page=input("please input stop page: \n")
    #print(stop_page)
    doc = open("hello_world.txt", "a+")
    for i in range(1,int(pagenum[0])):
        print("Now write " + str(i) + " page")
        pageurl = requests.get('https://fofa.so/result?page=' + str(i) + '&qbase64=' + searchbs64, headers=header)
        tree = etree.HTML(pageurl.text)
        urllist=tree.xpath('//div[@class="list_mod_t"]//a[@target="_blank"]/@href')
        for j in urllist:
            #print(j)
            doc.write(j+"\n")
        if i==int(stop_page):
            break
        time.sleep(10)
    doc.close()
    print("OK,Spider is End .")

def start():
    print("_fofapro_ars_session可通过F12-存储-cookie中查看")
    print("因为爬取过快的话，FOFA会启动反扒措施，默认休眠时间为10s")

if __name__ == '__main__':
    start()
    spider()