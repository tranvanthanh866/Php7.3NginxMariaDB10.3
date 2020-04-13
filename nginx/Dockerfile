FROM nginx
	
COPY nginx.conf /etc/nginx/conf.d/default.conf
COPY dev.php-test.com.conf /etc/nginx/conf.d/dev.php-test.com.conf

EXPOSE 80
EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]