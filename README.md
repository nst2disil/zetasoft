
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
