FROM nginx:1.15.4

ENV API_KEY 'API_KEY here from https://amplify.nginx.com/dashboard/' 
ENV AMPLIFY_IMAGENAME 'AmplifyAgent1Dev'


RUN apt-get update \
    && apt-get install curl python2.7 gnupg -qqy \
    && apt-get install -y procps \
    && curl -sS -L -O https://github.com/nginxinc/nginx-amplify-agent/raw/master/packages/install.sh \
    && chmod +x install.sh \
    && API_KEY=${API_KEY} sh ./install.sh -y


COPY /conf.d/stub_status.conf /etc/nginx/conf.d/stub_status.conf
COPY ./entrypoint.sh /entrypoint.sh
ENTRYPOINT [ "./entrypoint.sh" ]
