<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Patrón Pipeline en Laravel

En este proyecto se implementa el patrón pipeline en Laravel

### Patrón Pipeline

El patrón de diseño Pipeline, también conocido como patrón de tuberías, es un patrón de diseño estructural que organiza la ejecución de un proceso en una serie de pasos secuenciales, donde la salida de cada paso se convierte en la entrada del siguiente. Este enfoque facilita la modularidad, reutilización y mantenimiento del código.

En términos simples, el flujo de datos o trabajo se divide en etapas (o pasos), y cada etapa realiza una tarea específica. Cada paso en la secuencia puede ser encapsulado en una clase separada, lo que permite una fácil extensión y modificación del proceso sin afectar las otras partes del sistema.

## Requisitos

- PHP >= 8.1
- Composer
- Node.js y npm

## Instalación

1. Clona este repositorio: 

```bash
git clone https://github.com/Yeyoramirez17/laravel-pipeline.git
```
2. Entra al directorio del proyecto: 
```bash
cd tu-proyecto
```
3. Copia el archivo de configuración: 
```bash 
cp .env.example .env
```
4. Configura el archivo `.env` con tus datos de base de datos y otras configuraciones.
5. Instala las dependencias de PHP: 
```bash 
composer install
```
6. Genera la clave de la aplicación: 
```bash 
php artisan key:generate
```
7. Ejecuta las migraciones: 
```bash
php artisan migrate
```
8. Instala las dependencias de Node.js: 
```bash 
npm install
```
9. Compila los assets: 
```bash
npm run dev
```




