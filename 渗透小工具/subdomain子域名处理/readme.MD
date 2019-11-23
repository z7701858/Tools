使用方法如下：

usage: deal_subDomainBrust.py [-h] [-i INPUT] [-ou OUTURL] [-oi OUTIP]
                              [-t THREAD]
optional arguments:
  -h, --help            show this help message and exit
  -i INPUT, --input INPUT
                        Input Your fileName to Deal.
  -ou OUTURL, --outurl OUTURL
                        Output file to save url
  -oi OUTIP, --outip OUTIP
                        Output file to save ip
  -t THREAD, --thread THREAD
                        thread number, default 100
-i 其实是必须的，它是subDomainsBrute的结果文件 如163.txt
-ou 输出的域名文件， 默认 输入文件_url.txt
-oi 输出的IP的文件, 默认 输入文件_IP.txt
-t 线程数量 默认100
示例输出为:

只想分离URL和IP, 输入1, 想执行全过程, 输入2
2
2017-04-06 11:02:17,171**MainThread**:   Ip 已经写完！
2017-04-06 11:02:17,171**MainThread**:   Thanks God. Did One Thing Right.
2017-04-06 11:02:18,192**Thread-1**:     http://110.alipay.com
2017-04-06 11:02:18,765**Thread-6**:     http://home.alipay.com
2017-04-06 11:02:18,839**Thread-7**:     http://clive.alipay.com
2017-04-06 11:02:18,860**Thread-8**:     http://er.alipay.com
2017-04-06 11:02:18,930**Thread-9**:     http://taobao.wap.alipay.com
2017-04-06 11:02:19,530**Thread-12**:    http://image.alipay.com
2017-04-06 11:02:20,588**Thread-15**:    http://static.alipay.com
2017-04-06 11:02:20,687**Thread-20**:    http://piao.alipay.com
2017-04-06 11:02:21,129**Thread-21**:    http://accounts.alipay.com
2017-04-06 11:02:21,209**Thread-23**:    http://qy.alipay.com
2017-04-06 11:02:22,265**Thread-28**:    http://a.alipay.com
如果只想分离IP和域名，只需要选1即可， 如果想对域名进行筛选，选出其中可以访问的，选2. 但是这只是head方法去请求，查看返回状态码，只选取200, 301, 302, 几个。