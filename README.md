
# Zetasoft frontend install

## Deployment

Build image

```bash
  docker build -t zetasoft-front
```

Run application
```bash
  docker run -p 8080:80 -v $(pwd):/var/www/html zetasoft-front
```

Open [localhost:8080](http://localhost:8080/)

Demo [https://mrdoode.ru/zetasoft/demo.html](https://mrdoode.ru/zetasoft/demo.html)