FROM python:alpine3.17

COPY entrypoint /entrypoint

RUN adduser -D -u 54000 radio
RUN	apk update && \
	apk add git gcc musl-dev libffi-dev openssl-dev cargo && \
    pip install --upgrade pip && \
    pip cache purge && \
	git clone https://github.com/yorkshirenet/HBMonv2.git /hbmon && \
    cd /hbmon && \
	pip install --no-cache-dir -r requirements.txt && \
	apk del git gcc musl-dev libffi-dev openssl-dev && \
	chown -R radio /hbmon

USER radio

ENTRYPOINT [ "/entrypoint" ]
