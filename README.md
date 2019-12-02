# RunCloud-s-Assessment


The Setup:-

Linux Host: Setup online using Ubuntu at (srv.qeba.my) - Running go complied script and using cronjob to publish message to RabbitMQ.

Windows Host: PHP Application (Subsribe the message from the linux server and output the data).

RabbitMQ - Setup on the Ubuntu at (srv.qeba.my)


RabbitMQ Management:
http://srv.qeba.my:15672/

 User: test
 
 Pass: test

-----------------------------------------------------------
 Linux Application:
-----------------------------------------------------------
run.sh - Used by crontab to running the golang script.

"work/src/avail" – Get the available disk space in the Linux
"work/src/ttl" – Get total disk space in the Linux
"work/src/used" – Get the used space in the Linux

-----------------------------------------------------------
PHP Application:
-----------------------------------------------------------
index.php - Main pages where show the output of the data
function.php - The function to get the message from queue and calculation used at main pages

-----------------------------------------------------------
RabbitMQ:
-----------------------------------------------------------
3 Queues;
- diskavail
- disktotal
- diskused

3 Exchange;
- avail
- diskused
- totalsize

-----------------------------------------------------------
-----------------------------------------------------------

