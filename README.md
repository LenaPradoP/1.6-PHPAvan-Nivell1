# 📋 PHP Avanzado - Nivel 1

## 📄 Descripción  
Tres ejercicios sobre el uso de formularios HTML, variables de sesión, constantes mágicas y métodos mágicos.  

### Ejercicios  
1. **Formulario HTML y PHP**  
   - Crear un formulario HTML.  
   - Enviar los datos del formulario a un archivo PHP.  
   - Mostrar los valores recibidos utilizando variables superglobales y almacenar algunos en variables de sesión.  

2. **Constantes mágicas**  
   - Implementar un programa que utilice al menos un par de constantes mágicas o predefinidas.  

3. **Sobrescritura de métodos mágicos**  
   - Sobrescribir la lógica de un método mágico que no sea `__construct`.  

---

## 💻 Tecnologías Utilizadas  
- HTML5  
- PHP v8.0 o superior  

---

## 📋 Requisitos  
- Entorno de ejecución PHP configurado (como XAMPP, WAMP o Laragon).  
- Editor de texto o IDE compatible con PHP (como VSCode o PHPStorm).  

---

## 🛠️ Instalación  

1. **Clona este repositorio**:  
   ```bash
   git clone <https://github.com/LenaPradoP/1.6-PHPAvan-Nivell1>
   ```  
2. **Accede al directorio del proyecto**:  
   ```bash
   cd 1.6-PHPAvan-Nivell1
   ```  
3. **Configura tu servidor local**:  
   - Coloca los archivos dentro de la carpeta de tu servidor local (ej.: `htdocs` si utilizas XAMPP).  

---

## ▶️ Ejecución  

1. Abre el archivo `form.html` en tu servidor local:  
   ```
   http://localhost/1.6-PHPAvan-Nivell1/form.html
   ```  
2. Completa los campos del formulario y envíalos.  
3. Observa cómo los datos del formulario son procesados por `action.php`, donde:  
   - Los valores se muestran utilizando variables superglobales.  
   - Algunos valores se almacenan en variables de sesión.  

4. Para los ejercicios 2 y 3:  
   - Ejecuta `client.php` para ver el uso de constantes mágicas.  
   - Ejecuta `magic.php` para ver la sobrescritura de métodos mágicos.  

---

## 🌐 Despliegue  

Este proyecto es solo un ejemplo de aprendizaje y no está diseñado para ser desplegado en producción.  

---

## 🤝 Contribuciones  

¡Las contribuciones son bienvenidas! Si deseas contribuir, sigue estos pasos:  

1. Haz un fork del repositorio.  
2. Crea una nueva rama:  
   ```bash
   git checkout -b feature/NuevaFuncionalidad
   ```  
3. Realiza tus cambios y haz commit:  
   ```bash
   git commit -m "Añade Nueva Funcionalidad"
   ```  
4. Sube los cambios a tu repositorio:  
   ```bash
   git push origin feature/NuevaFuncionalidad
   ```  
5. Crea un pull request.  
