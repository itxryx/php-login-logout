FROM nginx:stable-bookworm

RUN set -eux && \
    apt update -qq

CMD /usr/sbin/nginx -g 'daemon off;' -c /etc/nginx/nginx.conf
