#!/bin/bash

# Colores
BLUE="\033[1;34m"
NC="\033[0m" # Sin color

echo -e "${BLUE}Actualizando repositorio local...${NC}"
git pull

# Copiar los archivos a la carpeta de destino
mkdir -p /var/www/ipublic
cp -r ./ /var/www/ipublic

# Verificar si Composer está instalado
if ! [ -x "$(command -v composer)" ]; then
  echo -e "${BLUE}Instalando Composer...${NC}"
  # Instalar Composer
  php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
  php composer-setup.php --install-dir=/usr/local/bin --filename=composer
  php -r "unlink('composer-setup.php');"
fi

echo -e "${BLUE}Instalando dependencias de Composer...${NC}"
# Ejecutar Composer para instalar las dependencias
composer update --no-interaction

echo -e "${BLUE}¡Tarea completada con éxito! 🌈 Sigue viviendo multicolor!${NC}"
