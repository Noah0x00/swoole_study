FROM centos:7

MAINTAINER Koji Kashiwabara

RUN yum update -y && yum groupinstall "Development Tools" -y && yum install git wget curl vim -y  && \
    yum install epel-release -y && rpm -Uvh http://rpms.famillecollet.com/enterprise/remi-release-7.rpm  && \
    yum install --enablerepo=remi,remi-php72 php php-swoole -y

CMD ["/sbin/init"]
