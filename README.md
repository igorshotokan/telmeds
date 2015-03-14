# Proyecto TELMEDS

Devs principales: linkmoises, wister, igor.

Guía rápida para uso de git

### Inicialización del repositorio
***
Esto solo se realiza la primera vez que se va a crear un repositorio.
```
mkdir medicore
cd medicore
git init
```

Si queremos añadir un archivo y empezar de cero

```
touch README.md
git add README.md
```

Si ya tenemos algo avanzado el proyecto, añadimos todos los archivos a git

```
git add .
```
Añadimos un comentario y subimos al repositorio
```
git commit -m 'inicialización del repositorio'
git remote add origin git@github.com:usuario/repositorio.git
git push -u origin master
```

### Repositorio existente
***
```
cd existing_git_repo
```
Recogemos los cambios que se han hecho en nuestra ausencia o que se han realizado vía web
```
git pull git@github.com:usuario/repositorio.git
```
Editamos y añadimos nuestros cambios, un comentario y subimos cuando estemos listos.
```
git add .
git commit -m 'comentario'
git push -u origin master
```

### Ver cambios realizados a repositorio local
***
```
git status
```
