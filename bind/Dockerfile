FROM ubuntu/bind9:latest

EXPOSE 53/udp
EXPOSE 53/tcp

RUN apt-get update && \
    apt-get install -y dnsutils && \
    apt-get autoremove -y && \
    apt-get clean -y && \
    rm -rf /var/lib/apt/lists/*

RUN cd /etc/bind/ && \
    dnssec-keygen -a RSASHA256 -b 2048 -n ZONE l1-3.ephec-ti.be && \
    dnssec-keygen -f KSK -a RSASHA256 -b 4096 -n ZONE l1-3.ephec-ti.be 
